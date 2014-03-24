<?php

namespace Acme\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CompteType extends AbstractType{

	/**
	 * Creation du formulaire permettant à un utilisateur de déclarer un compte bancaire ou de le modifier.
	 * Composé du nom et du numéro du compte bancaire. Les autres éléments, tel que
	 * l'utilisateur créant le compte sont récupérés dans le controleur.
	 *
	 * @param FormBuilderInterface $builder
	 * @param array $options
	 */
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('nom', 'text', array(
				'attr'  => array(
					'placeholder'   => 'Nom',
					'class'         => 'form-control'
				)
			))
			->add('numeroCompte', 'text', array(
				'attr'  => array(
					'placeholder'   => 'Numéro compte',
					'class'         => 'form-control'
				)
			))
			->add('save', 'submit', array(
				'attr'  => array(
					'value'  		=> 'Enregistrer',
					'class'         => 'btn btn-default'
				)
			));
	}

	/**
	 * Cette fonction permets, lors de la modification d'un compte bancaire de récupérer
	 * et de mettre en place sur le formulaire les informations
	 * de ce même compte
	 *
	 * @param OptionsResolverInterface $resolver
	 */
	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'Acme\UserBundle\Entity\Compte'
		));
	}



	public function getName()
	{
		return 'acme_userbundle_comptetype';
	}
}