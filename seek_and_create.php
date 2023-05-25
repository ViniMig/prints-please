<?php
    // options https://api.biorxiv.org/details/[SERVER]/[INTERVAL]/[CURSOR]
    // SERVER: biorxiv or medrxiv
    // INTERVAL: 2 dates separated by slash and a cursor for the starting point: https://api.biorxiv.org/details/biorxiv/2020-03-01/2020-03-02/5
    //          ->Vini believes these next 2 options are not working the way the people who implemented it believe it is working:    
    //          or a value indicating the N most recent papers: https://api.biorxiv.org/details/biorxiv/5
    //          or a value with the letter 'd' for the most recent N days: https://api.biorxiv.org/details/biorxiv/5d
    //
    // https://api.biorxiv.org/details/[server]/[DOI]/na/[format] returns detail for a single manuscript. 
    // For instance, https://api.biorxiv.org/details/biorxiv/10.1101/339747 will output metadata for the biorxiv paper with DOI 10.1101/339747.
    // 
    //alternatives: //https://api.biorxiv.org/pubs/biorxiv/  https://api.biorxiv.org/details/medrxiv/  https://api.biorxiv.org/pubs/biorxiv/ pubs->retrieves published preprints
    //
    //
    //$startdate=strtotime("Saturday"); $enddate=strtotime("+6 weeks", $startdate);
    //date('Y-m-d', timetoconvert) 
    function getPrintsDataByDate($date_from = null, $date_to = null, $isRandom = false, $server = 'biorxiv', $cursor = 0) {
        if ($date_to == null) $date_to = date('Y-m-d'); //default will be today
        
        if ($date_from == null) $date_from = date('Y-m-d', strtotime("-1 day", strtotime($date_to))); //default 1 day before date_to
        
        $url = 'https://api.biorxiv.org/details/'.$server.'/'.$date_from.'/'.$date_to.'/'.$cursor;
        $content = @file_get_contents($url);
        if ($content === FALSE) {
            $collection =  array('error'=>"<h3>Something went wrong with the connection. This happens sometimes, please try again!</h3>");
            $msgs =  array('error'=>"<h3>Something went wrong with the connection. This happens sometimes, please try again!</h3>");
        }
        else {
            $response = json_decode($content);
            $count = $response->messages[0]->total; //get total number of prints
            
            if ($count > 7) {
                $new_cursor = $count - 7; //select last 6 in the list - most likely the most recent
                if ($isRandom)
                    $new_cursor = rand(0,($count - 7)); //if random mode is selected select other random 6
                
                $url = 'https://api.biorxiv.org/details/'.$server.'/'.$date_from.'/'.$date_to.'/'.$new_cursor; //re-fetch data
                $content = @file_get_contents($url);
                if ($content === FALSE)
                    $collection =  array('error'=>"<h3>Something went wrong with the connection. This happens sometimes, please try again!</h3>");
                else {
                    $response = json_decode($content); //re-fetch data
                }
            }
                
            $msgs = $response->messages[0];
            $collection = $response->collection;
        }

        return array('messages'=>$msgs, 'results'=>$collection);
    }

    function getPrintDataByDOI($doi) {
        $url_pubs = "https://api.biorxiv.org/pubs/biorxiv/".$doi;
        $url_prints = "https://api.biorxiv.org/details/biorxiv/".$doi;;
        $response_pubs = json_decode(file_get_contents($url_pubs));
        if (empty($response_pubs->collection)) {
            $response_prints = json_decode(file_get_contents($url_prints));
            if (!empty($response_prints->collection))
                $collection = $response_prints->collection;
            else 
                $collection = array(); //sets empty list later we check and print error message
        }
        else
            $collection = $response_pubs->collection;

        return $collection;
    }

    function randomDay($start_date = '2013-11-07') {
        // Convert to timetamps
        $min = strtotime($start_date);
        $max = strtotime(date('Y-m-d'));

        // Generate random number
        $val = rand($min, $max);

        // Convert back to date format
        return date('Y-m-d', $val);
    }

    function randomDateInterval() {
        $from = randomDay();
        $to = randomDay($from);
        return array('from'=>$from, 'to'=>$to);
    }
    
    function createGallery($collection, $gallerySize) {
        if (isset($collection['error'])) {
            echo $collection['error'];
        }
        else {
            echo '<div class="card-gallery">';
        
            for ($i=0; $i<$gallerySize; $i++) { //print first 6 papers in the list
                echo '<div class="card" id="home-card-print-'.$collection[$i]->doi.$i.'">
                        <div class="info" id="card-info-print-'.$collection[$i]->doi.$i.'">
                            <div class="info-short" onclick="toggleDisplay(\'card-info-print-'.$collection[$i]->doi.$i.'\')">
                                <img class="category-img" src="assets/icons/'.str_replace(' ', '_', trim($collection[$i]->category)).'.svg" alt="'.ucfirst($collection[$i]->category).'" title="'.ucfirst($collection[$i]->category).'">
                                <p class="category-tag small-size-txt">'.ucfirst($collection[$i]->category).'</p>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-plus-circle-dotted click-icon" viewBox="0 0 16 16">
                                    <path d="M8 0c-.176 0-.35.006-.523.017l.064.998a7.117 7.117 0 0 1 .918 0l.064-.998A8.113 8.113 0 0 0 8 0zM6.44.152c-.346.069-.684.16-1.012.27l.321.948c.287-.098.582-.177.884-.237L6.44.153zm4.132.271a7.946 7.946 0 0 0-1.011-.27l-.194.98c.302.06.597.14.884.237l.321-.947zm1.873.925a8 8 0 0 0-.906-.524l-.443.896c.275.136.54.29.793.459l.556-.831zM4.46.824c-.314.155-.616.33-.905.524l.556.83a7.07 7.07 0 0 1 .793-.458L4.46.824zM2.725 1.985c-.262.23-.51.478-.74.74l.752.66c.202-.23.418-.446.648-.648l-.66-.752zm11.29.74a8.058 8.058 0 0 0-.74-.74l-.66.752c.23.202.447.418.648.648l.752-.66zm1.161 1.735a7.98 7.98 0 0 0-.524-.905l-.83.556c.169.253.322.518.458.793l.896-.443zM1.348 3.555c-.194.289-.37.591-.524.906l.896.443c.136-.275.29-.54.459-.793l-.831-.556zM.423 5.428a7.945 7.945 0 0 0-.27 1.011l.98.194c.06-.302.14-.597.237-.884l-.947-.321zM15.848 6.44a7.943 7.943 0 0 0-.27-1.012l-.948.321c.098.287.177.582.237.884l.98-.194zM.017 7.477a8.113 8.113 0 0 0 0 1.046l.998-.064a7.117 7.117 0 0 1 0-.918l-.998-.064zM16 8a8.1 8.1 0 0 0-.017-.523l-.998.064a7.11 7.11 0 0 1 0 .918l.998.064A8.1 8.1 0 0 0 16 8zM.152 9.56c.069.346.16.684.27 1.012l.948-.321a6.944 6.944 0 0 1-.237-.884l-.98.194zm15.425 1.012c.112-.328.202-.666.27-1.011l-.98-.194c-.06.302-.14.597-.237.884l.947.321zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a6.999 6.999 0 0 1-.458-.793l-.896.443zm13.828.905c.194-.289.37-.591.524-.906l-.896-.443c-.136.275-.29.54-.459.793l.831.556zm-12.667.83c.23.262.478.51.74.74l.66-.752a7.047 7.047 0 0 1-.648-.648l-.752.66zm11.29.74c.262-.23.51-.478.74-.74l-.752-.66c-.201.23-.418.447-.648.648l.66.752zm-1.735 1.161c.314-.155.616-.33.905-.524l-.556-.83a7.07 7.07 0 0 1-.793.458l.443.896zm-7.985-.524c.289.194.591.37.906.524l.443-.896a6.998 6.998 0 0 1-.793-.459l-.556.831zm1.873.925c.328.112.666.202 1.011.27l.194-.98a6.953 6.953 0 0 1-.884-.237l-.321.947zm4.132.271a7.944 7.944 0 0 0 1.012-.27l-.321-.948a6.954 6.954 0 0 1-.884.237l.194.98zm-2.083.135a8.1 8.1 0 0 0 1.046 0l-.064-.998a7.11 7.11 0 0 1-.918 0l-.064.998zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                                </svg>
                            </div>
                            <div class="info-full">
                                <h3 class="card-title small-title">'.$collection[$i]->title.'</h3>
                                <p class="authors small-size-txt">'.$collection[$i]->authors.'</p>
                                <p class="date normal-size-txt">'.$collection[$i]->date.'</p>
                                <p class="doi normal-size-txt">'.$collection[$i]->doi.'</p>
                                <p class="full-paper"><a href="https://www.biorxiv.org/content/'.$collection[$i]->doi.'v'.$collection[$i]->version.'" target="_blank"><i class="fa-solid fa-newspaper" title="Full Print"></i></a></p>
                            </div>
                        </div>
                        <div class="general">
                            <h3 class="card-title medium-small-title">'.$collection[$i]->title.'</h3>
                            <p class="corresp-author normal-size-txt">'.$collection[$i]->author_corresponding.' et al.</p>
                            <p class="date normal-size-txt">'.$collection[$i]->date.'</p>
                            <div class="read-abstract" onclick="displayAbstract(\'abstract-'.$collection[$i]->doi.$i.'\')">
                                <i class="fa-solid fa-book-open-reader" title="read abstract"></i>
                                <p>Abstract</p>
                            </div>
                        </div>
                    </div>';
            }

            echo '</div>';

            for ($i=0; $i<$gallerySize; $i++) {
                echo "<div class='abstract-modal' id='abstract-".$collection[$i]->doi.$i."'>";
                    echo "<div class='abstract-text'>\n
                            <div class='modal-head'>\n
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-x-square-fill close-modal' viewBox='0 0 16 16' onclick='closeModal(\"abstract-".$collection[$i]->doi.$i."\")'>
                                    <path d='M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z'/>\n
                                </svg>\n
                            </div>\n
                            <h3 class='abstract-title normal-title'>".$collection[$i]->title."</h3>\n
                            <p class='abstract-authors normal-size-txt'>".$collection[$i]->authors."</p>\n
                            <p class='abstract-abstract normal-size-txt'>".$collection[$i]->abstract."</p>\n
                            </div>";
                echo "</div>";
            }
        }
    }
?>