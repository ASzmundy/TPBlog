<?php

namespace App\Form;

use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Titre',null, array(
                'label' => 'Titre : ',
                'attr' => array('style' => 'width: 750px')
            )
        )
            ->add('Contenu',null, array(
                'label' => ' ',
                'attr' => array('style' => 'width: 1000px', 'height: 780px')
            )
        )
            ->add('categorie',null, array(
                'label' => ' Catégorie :'
            )
        );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
