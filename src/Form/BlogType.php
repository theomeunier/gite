<?php

namespace App\Form;

use App\Entity\Blog;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BlogType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class,[
                'label' => 'form.blog.title',
            ])
            ->add('description', TextareaType::class,[
                'label' => 'form.blog.description',
            ])
            ->add('article', TextareaType::class,[
                'label' => 'form.blog.article',
            ])
            ->add('image',FileType::class,[
                'multiple' => true,
                'mapped' => false,
                'required' => false,
                'label' => 'form.blog.image',
            ] )
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Blog::class,
            'translation_domain' => 'forms'
        ]);
    }
}
