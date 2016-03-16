<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<div class="row produit">
	<div class="medium-5 columns text-center gauche">
		<img src="<?php echo get_template_directory_uri () ?>/assets/images/matrel/<?php the_field('grande_image_du_produit'); ?>" />
		<p><?php the_field('nom_du_produit_sous_image'); ?></p>

		<section>
			<ul class="row no-bullet">
				<li class="small-4 columns"><img src="<?php echo get_template_directory_uri () ?>/assets/images/matrel/<?php the_field('image_1'); ?>" /></li>
				<li class="small-4 columns"><img src="<?php echo get_template_directory_uri () ?>/assets/images/matrel/<?php the_field('image_2'); ?>" /></li>
				<li class="small-4 columns"><img src="<?php echo get_template_directory_uri () ?>/assets/images/matrel/<?php the_field('image_3'); ?>" /></li>
			</ul>
			<nav>
				<img src="<?php echo get_template_directory_uri () ?>/assets/images/matrel/fleche-gauche.png" class="gauche" />
				<img src="<?php echo get_template_directory_uri () ?>/assets/images/matrel/fleche-droite.png" class="droite" />
			</nav>
		</section>


	</div>

	<div class="medium-7 columns droite">
		<a href="#!" class="gros-bouton"><i class="fa fa-pencil-square-o"></i> Nous contacter</a>
		<a href="#!" class="gros-bouton-2"><i class="fa fa-download"></i> Télécharger le PDF</a>
		<h2><?php the_title(); ?></h2>
		<h3><?php the_field('sous_nom_du_produit'); ?></h3>
		<section>
			<?php the_content() ?>
		</section>
	</div>

</div>

<div class="caracteristiquesavis">

	<header class="hide-for-small-only">
		<div class="row">
			<div class="medium-6 columns">Caractéristiques de la <?php the_title(); ?></div>
			<div class="medium-6 columns">
				Avis clients
				<i class="fa fa-star or"></i><i class="fa fa-star or"></i><i class="fa fa-star or"></i><i class="fa fa-star or"></i><i class="fa fa-star"></i>
				4/5 (3avis)
			</div>
		</div>
	</header>

	<section>
		<div class="row">

			<header class="small-12 columns show-for-small-only">
				<div>Caractéristiques</div>
			</header>

			<div class="medium-6 columns border">
				<?php the_field('caracteristique_du_produit'); ?>
			</div>

			<header class="small-12 columns show-for-small-only">
				<div>
					Avis clients
					<img src="<?php echo get_template_directory_uri () ?>/assets/images/matrel/star-petite-4-5.png" />
					4/5 (3avis)
				</div>
			</header>

			<div class="medium-5 medium-offset-1 columns">
				<div class="avis">
					<p class="auteur"><strong>Lisa Bert</strong> - December 5, 2014</p>
					<p><i class="fa fa-star or"></i><i class="fa fa-star or"></i><i class="fa fa-star or"></i><i class="fa fa-star or"></i><i class="fa fa-star"></i></p>
					<blockquote>
						“Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi.”

					</blockquote>
				</div>
				<div class="avis">
					<p class="auteur"><strong>Lisa Bert</strong> - December 5, 2014</p>
					<p><i class="fa fa-star or"></i><i class="fa fa-star or"></i><i class="fa fa-star or"></i><i class="fa fa-star or"></i><i class="fa fa-star"></i></p>
					<blockquote>
						“Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi.”

					</blockquote>
				</div>
				<div class="avis">
					<p class="auteur"><strong>Lisa Bert</strong> - December 5, 2014</p>
					<p><i class="fa fa-star or"></i><i class="fa fa-star or"></i><i class="fa fa-star or"></i><i class="fa fa-star or"></i><i class="fa fa-star"></i></p>
					<blockquote>
						“Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi.”

					</blockquote>
				</div>
				<div class="text-right">
					<a href="#!">Voir tous les avis ></a>
				</div>
			</div>

		</div>
	</section>

</div>

<div class="autres-produits">
	<div class="row">
		<div class="small-12 columns text-center">
			<h5>Vous pourriez également être intéressé(e) par...</h5>
		</div>
	</div>
	<div class="row">
		<div class="medium-3 columns suggestion">
			<section>
				<div><img src="<?php echo get_template_directory_uri () ?>/assets/images/matrel/suggestion-1.jpg" /></div>
				<h6>Raineuse Touchline C 375</h6>
				<p><i class="fa fa-star or"></i><i class="fa fa-star or"></i><i class="fa fa-star or"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> (1 avis)</p>
			</section>
		</div>
		<div class="medium-3 columns suggestion">
			<section>
				<div><img src="<?php echo get_template_directory_uri () ?>/assets/images/matrel/suggestion-2.jpg" /></div>
				<h6>Touchline CP 375</h6>
				<p><i class="fa fa-star or"></i><i class="fa fa-star or"></i><i class="fa fa-star or"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> (1 avis)</p>
			</section>
		</div>
		<div class="medium-3 columns suggestion">
			<section>
				<div><img src="<?php echo get_template_directory_uri () ?>/assets/images/matrel/suggestion-3.jpg" /></div>
				<h6>Touchline CPC 375 Duo</h6>
				<p><i class="fa fa-star or"></i><i class="fa fa-star or"></i><i class="fa fa-star or"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> (1 avis)</p>
			</section>
		</div>
		<div class="medium-3 columns suggestion">
			<section>
				<div><img src="<?php echo get_template_directory_uri () ?>/assets/images/matrel/suggestion-4.jpg" /></div>
				<h6>Raineuse Touchline C 375</h6>
				<p><i class="fa fa-star or"></i><i class="fa fa-star or"></i><i class="fa fa-star or"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> (1 avis)</p>
			</section>
		</div>
	</div>
</div>
