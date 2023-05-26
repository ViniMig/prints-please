<?php
    $categories = array(
        "animal_behavior_and_cognition", "bioinformatics", "systems_biology",
        "cell_biology", "neuroscience", "biochemistry", "bioengineering", "biophysics",
        "cancer_biology", "evolutionary_biology", "synthetic_biology", "genetics",
        "immunology", "genomics", "ecology", "developmental_biology", "microbiology",
        "molecular_biology", "plant_biology", "physiology", "scientific_communication_and_education",
        "zoology", "paleontology", "pathology", "pharmacology_and_toxicology"
    );

    $rights_author = array(
        'DBCLS'=>"<a href='https://togotv.dbcls.jp/en/pics.html' target='_blank'>DBCLS</a>",
        'Guillaume Paumier'=>"<a href='https://guillaumepaumier.com/bio/' target='_blank'>Guillaume Paumier</a>",
        'Simon Dürr'=>"<a href='https://twitter.com/simonduerr' target='_blank'>Simon Dürr</a>",
        'Servier'=>"<a href='https://smart.servier.com/' target='_blank'>Servier</a>",
        'Marcel Tisch'=>"<a href='https://twitter.com/MarcelTisch' target='_blank'>Marcel Tisch</a>"
    );

    $rights_license = array(
        'ccby4-unport'=>"<a href='https://creativecommons.org/licenses/by/4.0/' target='_blank'>CC-BY 4.0 Unported</a>",
        'ccby-sa-3'=>"<a href='https://creativecommons.org/licenses/by-sa/3.0/' target='_blank'>CC-BY SA 3.0</a>",
        'cc0'=>"<a href='https://creativecommons.org/publicdomain/zero/1.0/' target='_blank'>CC0</a>",
        'ccby3-unport'=>"<a href='https://creativecommons.org/licenses/by/3.0/' target='_blank'>CC-BY 3.0 Unported</a>"
    );

    $category_attribution = array(
        "Operant_Conditioning_Response_to_Light_Stimulation icon by {$rights_author['DBCLS']} is licensed under {$rights_license['ccby4-unport']}",
        "DNA_microarray icon by {$rights_author['Guillaume Paumier']} is licensed under {$rights_license['ccby-sa-3']}",
        "neural-network-1 icon by {$rights_author['Simon Dürr']} is licensed under {$rights_license['cc0']}",
        "cell-MDCK icon by {$rights_author['DBCLS']} is licensed under {$rights_license['ccby4-unport']}",
        "Frontal_plane_of_the_brain_amygdala icon by {$rights_author['DBCLS']} is licensed under {$rights_license['ccby4-unport']}",
        "erlenmeyer-blue icon by {$rights_author['Servier']} is licensed under {$rights_license['ccby3-unport']}",
        "micropipette-multi icon by {$rights_author['Servier']}is licensed under {$rights_license['ccby3-unport']}",
        "membrane-3d-bluelight icon by {$rights_author['Servier']} is licensed under {$rights_license['ccby3-unport']}",
        "dissemination icon by {$rights_author['Servier']} is licensed under {$rights_license['ccby3-unport']}",
        "monkey icon by {$rights_author['Servier']} is licensed under {$rights_license['ccby3-unport']}",
        "bacterium icon by {$rights_author['Servier']} is licensed under {$rights_license['ccby3-unport']}",
        "chromosome-1 icon by {$rights_author['Servier']} is licensed under {$rights_license['ccby3-unport']}",
        "igM-immunoglobulin icon by {$rights_author['Servier']} is licensed under {$rights_license['ccby3-unport']}",
        "dna-nucleotides icon by {$rights_author['Servier']} is licensed under {$rights_license['ccby3-unport']}",
        "Fern_palm icon by {$rights_author['DBCLS']} is licensed under {$rights_license['ccby4-unport']}",
        "Mitosis icon by {$rights_author['Servier']} is licensed under {$rights_license['ccby3-unport']}",
        "Bacillus_subtilis icon by {$rights_author['DBCLS']} is licensed under {$rights_license['ccby4-unport']}",
        "translation icon by {$rights_author['Servier']} is licensed under {$rights_license['ccby3-unport']}",
        "Arabidopsis_thaliana icon by {$rights_author['DBCLS']} is licensed under {$rights_license['ccby4-unport']}",
        "patient_mutant icon by {$rights_author['Marcel Tisch']} is licensed under {$rights_license['cc0']}",
        "Meeting icon by {$rights_author['DBCLS']} is licensed under {$rights_license['ccby4-unport']}",
        "European_honey_bee_adult icon by {$rights_author['DBCLS']} is licensed under {$rights_license['ccby4-unport']}",
        "Chambered_nautilus icon by {$rights_author['DBCLS']} is licensed under {$rights_license['ccby4-unport']}",
        "disease_model icon by {$rights_author['Marcel Tisch']} is licensed under {$rights_license['cc0']}",
        "Vaccine_bottle icon by {$rights_author['DBCLS']} is licensed under {$rights_license['ccby4-unport']}"
    );
?>
<section>
    <div class="gallery-intro">
        <h3 class="attr-title normal-title">Loader animations</h3>
    </div>
    <div class="attribution-gal">
        <div class="about-card">
            <svg class="loader-svg default-loader" version="1.1" id="L1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                <circle fill="none" stroke="#fff" stroke-width="6" stroke-miterlimit="15" stroke-dasharray="14.2472,14.2472" cx="50" cy="50" r="47" >
                    <animateTransform 
                        attributeName="transform" 
                        attributeType="XML" 
                        type="rotate"
                        dur="5s" 
                        from="0 50 50"
                        to="360 50 50" 
                        repeatCount="indefinite" />
                </circle>
                <circle fill="none" stroke="#fff" stroke-width="1" stroke-miterlimit="10" stroke-dasharray="10,10" cx="50" cy="50" r="39">
                    <animateTransform 
                        attributeName="transform" 
                        attributeType="XML" 
                        type="rotate"
                        dur="5s" 
                        from="0 50 50"
                        to="-360 50 50" 
                        repeatCount="indefinite" />
                </circle>
                <g fill="#fff">
                <rect x="30" y="35" width="5" height="30">
                    <animateTransform 
                    attributeName="transform" 
                    dur="1s" 
                    type="translate" 
                    values="0 5 ; 0 -5; 0 5" 
                    repeatCount="indefinite" 
                    begin="0.1"/>
                </rect>
                <rect x="40" y="35" width="5" height="30" >
                    <animateTransform 
                    attributeName="transform" 
                    dur="1s" 
                    type="translate" 
                    values="0 5 ; 0 -5; 0 5" 
                    repeatCount="indefinite" 
                    begin="0.2"/>
                </rect>
                <rect x="50" y="35" width="5" height="30" >
                    <animateTransform 
                    attributeName="transform" 
                    dur="1s" 
                    type="translate" 
                    values="0 5 ; 0 -5; 0 5" 
                    repeatCount="indefinite" 
                    begin="0.3"/>
                </rect>
                <rect x="60" y="35" width="5" height="30" >
                    <animateTransform 
                    attributeName="transform" 
                    dur="1s" 
                    type="translate" 
                    values="0 5 ; 0 -5; 0 5"  
                    repeatCount="indefinite" 
                    begin="0.4"/>
                </rect>
                <rect x="70" y="35" width="5" height="30" >
                    <animateTransform 
                    attributeName="transform" 
                    dur="1s" 
                    type="translate" 
                    values="0 5 ; 0 -5; 0 5" 
                    repeatCount="indefinite" 
                    begin="0.5"/>
                </rect>
                </g>
            </svg>
            <p><a href="https://codepen.io/nikhil8krishnan/pen/rVoXJa">Pure SVG Loader Animation</a> made with <i>♥</i> by <a target="_blank" href="https://codepen.io/nikhil8krishnan">Nikhil Krishnan</a></p>
        </div>
        <div class="about-card">
            <svg class="d20loader loader-svg" version="1.1" x="0px" y="0px" viewBox="0 0 100 125">
                <path d="M91.9,74.7C91.9,74.7,91.9,74.7,91.9,74.7c0.1-0.1,0.1-0.2,0.1-0.2c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1  c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.2c0,0,0-0.1,0-0.1c0-0.1,0-0.2,0-0.2V27.2c0,0,0,0,0-0.1c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1  c0,0,0,0,0-0.1c0,0,0,0,0-0.1c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1c0,0,0,0,0,0c0-0.1-0.1-0.1-0.1-0.2c0,0,0,0,0,0c0,0,0,0,0,0  c0,0,0,0,0-0.1c0-0.1-0.1-0.1-0.1-0.1c0,0,0,0,0,0c0,0,0,0,0-0.1c0,0-0.1-0.1-0.1-0.1c0,0,0,0,0,0c0,0,0,0,0,0c0,0-0.1-0.1-0.2-0.1  c0,0,0,0-0.1,0c0,0,0,0,0,0L50.9,2.3c-0.6-0.3-1.3-0.3-1.8,0L8.8,25.6c0,0,0,0,0,0c-0.1,0-0.1,0.1-0.2,0.1c0,0,0,0-0.1,0  c0,0-0.1,0.1-0.1,0.1c0,0,0,0-0.1,0.1c0,0-0.1,0.1-0.1,0.1c0,0,0,0.1-0.1,0.1c0,0,0,0-0.1,0.1c0,0,0,0,0,0c0,0,0,0.1,0,0.1  c0,0,0,0.1-0.1,0.1c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1  c0,0,0,0,0,0.1v46.5c0,0,0,0,0,0v0c0,0.1,0,0.2,0,0.3c0,0,0,0.1,0,0.1c0,0.1,0.1,0.2,0.1,0.3c0,0,0,0,0,0c0,0,0,0,0,0  c0,0.1,0.1,0.2,0.2,0.3c0,0,0,0,0,0.1C8.2,74.9,8.3,75,8.4,75c0,0,0,0,0,0c0.1,0.1,0.1,0.1,0.2,0.2c0,0,0,0,0.1,0c0,0,0,0,0.1,0  l40.3,23.3c0,0,0,0,0,0c0,0,0.1,0,0.1,0.1c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1,0c0,0,0,0,0.1,0  c0.1,0,0.1,0,0.2,0c0.1,0,0.1,0,0.2,0c0,0,0,0,0.1,0c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1,0  c0,0,0.1,0,0.1-0.1c0,0,0,0,0,0l40.3-23.3c0,0,0,0,0,0c0,0,0,0,0.1,0c0,0,0,0,0.1,0c0,0,0.1,0,0.1-0.1c0,0,0.1-0.1,0.1-0.1  c0,0,0.1,0,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0-0.1,0.1-0.1C91.8,74.8,91.8,74.7,91.9,74.7z M11.9,37.6l11.2,27.8  c0.1,0.3,0,0.7-0.4,0.9l-10.3,4.3c-0.4,0.2-0.9-0.1-0.9-0.6V37.7C11.5,37.5,11.8,37.4,11.9,37.6z M69.9,65.2H30.1  c-0.5,0-0.8-0.6-0.6-1l19.9-34.5c0.3-0.4,0.9-0.4,1.1,0l19.9,34.5C70.7,64.7,70.4,65.2,69.9,65.2z M25.6,61.6L12.7,29.7  c-0.2-0.4,0.1-0.9,0.6-0.9l32.2-1.6c0.5,0,0.9,0.5,0.6,1L26.7,61.7C26.5,62.2,25.8,62.2,25.6,61.6z M69.5,70l-19,23.4  c-0.3,0.3-0.8,0.3-1,0L30.5,70c-0.3-0.4,0-1.1,0.5-1.1h38C69.5,68.9,69.8,69.6,69.5,70z M73.3,61.7L53.9,28.2c-0.3-0.5,0.1-1,0.6-1  l32.2,1.6c0.5,0,0.7,0.5,0.6,0.9L74.4,61.6C74.2,62.2,73.5,62.2,73.3,61.7z M51.8,22.8V8.2c0-0.5,0.6-0.8,1-0.6L82,24.5  c0.2,0.1,0.1,0.4-0.1,0.4l-29.5-1.5C52.1,23.4,51.8,23.1,51.8,22.8z M47.5,23.4l-29.5,1.5c-0.2,0-0.3-0.3-0.1-0.4L47.2,7.7  c0.4-0.3,1,0.1,1,0.6v14.5C48.2,23.1,47.9,23.4,47.5,23.4z M25.5,69.7l16.1,19.9c0.1,0.2-0.1,0.4-0.3,0.3L15,74.7  c-0.5-0.3-0.4-1,0.1-1.2l9.7-4C25,69.4,25.3,69.5,25.5,69.7z M75.2,69.5l9.7,4c0.5,0.2,0.6,0.9,0.1,1.2L58.6,89.9  c-0.2,0.1-0.4-0.1-0.3-0.3l16.1-19.9C74.7,69.5,75,69.4,75.2,69.5z M87.6,70.6l-10.3-4.3c-0.3-0.1-0.5-0.5-0.4-0.9l11.2-27.8  c0.1-0.2,0.4-0.1,0.4,0.1V70C88.5,70.5,88,70.8,87.6,70.6z" />
                <text x="45" y="55" stroke="lightblue" stroke-width="1px">20</text>
            </svg>
            <p><a href="https://codepen.io/rimmu/pen/GXMKWQ">D20#2</a> svg icon made by <a href="https://codepen.io/rimmu/pens/public">Michał Wojciechowski</a></p>
        </div>
    </div>
    <div class="gallery-intro">
        <h3 class="attr-title normal-title">Header image</h3>
    </div>
    <div class="attribution-gal">
        <div class="about-card">
            <img src="assets/imgs/header.jpg" alt="header image dna">
            <p>Photo by <a href="https://unsplash.com/@3dparadise?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Braňo</a> on <a href="https://unsplash.com/photos/Mm1VIPqd0OA?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a></p>
        </div>
    </div>

    <div class="gallery-intro">
        <h3 class="attr-title normal-title">Category icons</h3>
        <p>All icons found through the website <a href="https://bioicons.com/">Bioicons</a></p>
    </div>
    <div class="attribution-gal">
        <?php
            for ($i=0; $i<count($categories); $i++) {
                echo "<div class='about-card'>";
                    echo "<img src='assets/icons/".$categories[$i].".svg' alt='".$categories[$i]."' title='".$categories[$i]."'>";
                    echo "<p class='categ-attrib'>".$category_attribution[$i]."</p>";
                echo "</div>";
            }
        ?>
    </div>
</section>
<!-- <a href='' target='_blank'></a> -->