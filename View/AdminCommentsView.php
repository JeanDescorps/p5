<?php $activePage = 'comments'; ?>
<div class="main-content-container container-fluid px-4">
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Commentaires</span>
            <h3 class="page-title">Tous les commentaires</h3>
        </div>
    </div>
    <!-- Comments to validate -->
    <div class="col mb-4">
        <div class="card card-small blog-comments">
            <div class="card-header border-bottom">
            	<h6 class="m-0">Commentaires à valider</h6>
            </div>
            <div class="card-body p-0">
            	<div class="row">
                    <?php $i = 0; ?>
                    <?php $nbInvaComment = count($invalidateComments);?>
                    <?php foreach ($invalidateComments as $comment) : ?>
                        <?php if ($i % 3 == 0) : ?>
                        	<div class="col-lg-4 col-md-6 col-sm-12 mb-md-4">
                        <?php endif; ?>                
                    	<?php $i++; ?>                  
                    	<div class="blog-comments__item d-flex p-3">
                            <div class="blog-comments__avatar mr-3">
                            	<img src="Content/backend/images/avatars/1.jpg" alt="User avatar" /> 
                            </div>
                        	<div class="blog-comments__content">
                        		<div class="blog-comments__meta text-muted">
                                    <a class="text-secondary" href="#">Pseudo</a> sur
                                    <a class="text-secondary" href="#">Nom Article</a>
                        			<span class="text-muted">– il y a "x" jours</span>
                   			 	</div>
                    			<p class="m-0 my-1 mb-2 text-muted"><?= $comment->getContent(); ?></p>
                        		<div class="blog-comments__actions">
                            		<div class="btn-group btn-group-sm">
                    					<button type="submit" class="btn btn-white">
                    					<span class="text-success">
                    					<i class="material-icons">check</i>
               						 	</span> <a href="?action=validateComment&id=<?= $comment->getId(); ?>">Approuver</a> </button>
                                        <button type="submit" class="btn btn-white confirm" data-toggle="modal" data-target="#commentModal" data-id="<?= $comment->getId(); ?>">
                                        <span class="text-danger">
                                        <i class="material-icons">clear</i>
                                        </span> Rejeter </button>
                                        <button type="submit" class="btn btn-white">
                                        <span class="text-light">
                                        <i class="material-icons">more_vert</i>
                                        </span> <a href="?action=editCommentView&id=<?= $comment->getId(); ?>">Editer</a> </button>
                        			</div>
                        		</div>
                        	</div>
                    	</div>
                        <?php if ($i % 3 == 0 || $i == $nbInvaComment) : ?>
                        	</div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

    
    <!-- End -->
    <!-- Validate Comments -->
    <div class="col mb-4">
        <div class="card card-small blog-comments">
            <div class="card-header border-bottom">
            	<h6 class="m-0">Commentaires publiés</h6>
            </div>
            <div class="card-body p-0">
                <div class="row">
                    <?php $i = 0; ?>
                    <?php $nbVaComment = count($validateComments);?>
                    <?php foreach ($validateComments as $comment) : ?>
                        <?php if ($i % 3 == 0) : ?>
                    		<div class="col-lg-4 col-md-6 col-sm-12 mb-md-4">
                        <?php endif; ?>                
                    	<?php $i++; ?>
                        <div class="blog-comments__item d-flex p-3">
                            <div class="blog-comments__avatar mr-3">
                            	<img src="Content/backend/images/avatars/1.jpg" alt="User avatar" /> 
                            </div>
                            <div class="blog-comments__content">
                                <div class="blog-comments__meta text-muted">
                                    <a class="text-secondary" href="#">Pseudo</a> sur
                                    <a class="text-secondary" href="#">Nom Article</a>
                                    <span class="text-muted">– il y a "x" jours</span>
                                </div>
                                <p class="m-0 my-1 mb-2 text-muted"><?= $comment->getContent(); ?></p>
                                <div class="blog-comments__actions">
                                    <div class="btn-group btn-group-sm">         
                                        <button type="submit" class="btn btn-white confirm" data-toggle="modal" data-target="#commentModal" data-id="<?= $comment->getId(); ?>">
                                        <span class="text-danger">
                                        <i class="material-icons">clear</i>
                                        </span> Supprimer </button>
                                        <button type="submit" class="btn btn-white">
                                        <span class="text-light">
                                        <i class="material-icons">more_vert</i>
                                        </span> <a href="?action=editCommentView&id=<?= $comment->getId(); ?>">Editer</a> </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if ($i % 3 == 0 || $i == $nbVaComment) : ?>
                        	</div>
                        <?php endif; ?>
                    <?php endforeach; ?>
    				
            	</div>
            </div>
        </div>
    </div>
</div>
<?php include_once 'ModalCommentView.php';?>
    <!-- End -->