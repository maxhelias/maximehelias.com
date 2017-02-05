<?php $this->assign('title', 'Bienvenue'); ?>

<div class="row">
</div>
<div class="row">
    <div class="col s12 m12">
        <div class="card">
            <div class="card-content">
                <div class="row">
                    <div class="col s12 offset-m1 m5 l3">
                        <img src="img/me.jpg" alt="profile image" class="responsive-img"s>
                    </div>
                    <div class="col s12 m5 l5 center-align">
                        <h4>Maxime Hélias</h4>
                        <h5>Développeur web back-end</h5>
                        <div class="divider"></div><br>
                        <p>Né dans l'essor d'Internet, je suis un passionné d'informatique et toujours à la recherche de nouvelles technologie.</p>
                        <p>Soutenant la communauté de l'Open Source, je partage également mon savoir grâce aux possibilités qu'offrent les joies d'Internet.</p>
                        <br><a class="btn btn-large waves-effect waves-light" href="pdf/cv.pdf" target="blank"><i class="material-icons left">file_download</i>Télécharger mon C.V.</a>
                    </div>
                    <div class="col s12 offset-m2 m8 l4">
                        <ul class="collection" style="border:inherit;">
                            <li class="collection-item avatar">
                                <i class="material-icons circle green">cake</i>
                                <span class="title"><b>Age</b></span>
                                <p><?= $age; ?> ans</p>
                            </li>
                            <li class="collection-item avatar">
                                <i class="material-icons circle grey">folder</i>
                                <span class="title"><b>GitHub</b></span>
                                <p><a href="http://github.com/maxhelias" target="_blank"><b><u>Voir mon profil GitHub</u></b></a></p>
                            </li>
                            <li class="collection-item avatar">
                                <i class="material-icons circle blue">description</i>
                                <span class="title"><b>LinkedIn</b></span>
                                <p><a href="http://www.linkedin.com/in/maximehelias" target="_blank"><b><u>Voir mon profil LinkedIn</u></b></a></p>
                            </li>
                            <li class="collection-item avatar">
                                <i class="material-icons circle red">email</i>
                                <span class="title"><b>E-Mail</b></span>
                                <p>maximehelias16@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>