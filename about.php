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