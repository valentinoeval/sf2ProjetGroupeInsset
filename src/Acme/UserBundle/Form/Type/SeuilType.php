<?php
/**
 * Created by PhpStorm.
 * User: guiguinox
 * Date: 10/03/14
 * Time: 13:58
 */

namespace Acme\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SeuilType extends AbstractType{

	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('seuil', 'text', array(
				'attr'  => array(
					'placeholder'   => 'Seuil (€)',
					'class'         => 'form-control'
				)
			))
			->add('save', 'submit', array(
				'attr'  => array(
					'class'         => 'btn btn-default'
				)
			));
	}

	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'Acme\UserBundle\Entity\Seuil'
		));
	}

	public function getName()
	{
		return 'acme_userbundle_opbancairetype';
	}
}