<?php

namespace Acme\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OpBancaireType extends AbstractType{

	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('nom', 'text')
			->add('montant', 'text')
			->add('type', 'checkbox', array(
				'label'     => 'Crédit ?',
				'required'  => false,
			))
			->add('categories', 'entity', array(
				'class' => 'UserBundle:Categorie',
				'property' => 'nom',
				'multiple' => false,
				'expanded' => false,
				'attr'	=> array(
					'class' => 'dropdown-menu',
					'role'	=> 'menu'
				)
			))
			->add('save', 'submit');
	}


	/*public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'Acme\UserBundle\Entity\OperationBancaire'
		));
	}*/



	public function getName()
	{
		return 'acme_userbundle_opbancairetype';
	}
}