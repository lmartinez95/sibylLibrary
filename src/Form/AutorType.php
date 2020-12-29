<?php

namespace App\Form;

use App\Entity\Autor;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Pais;
use Symfony\Component\Form\Extension\Core\Type As Tipos;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class AutorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('autNombre', null, ['required' => true, 'attr' => ['class' => 'form-control', 'placeholder' => 'Nombre'] ])
            ->add('autApellido', null, ['required' => true, 'attr' => ['class' => 'form-control', 'placeholder' => 'Apellido'] ])
            ->add('autFechaNac', Tipos\DateType::class, ['widget' => 'single_text', 'html5' => true, 'required' => true, 'attr' => ['class' => 'form-control'] ])
            ->add('paiId', EntityType::class, [
                'class' => Pais::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('p')
                        ->orderBy('p.paiNombre', 'ASC');
                },
                'choice_label' => 'painombre',
                'attr' => ['class' => 'form-control']
            ])
            ->add('submit', Tipos\SubmitType::class, ['attr' => ['class' => 'btn btn-primary']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Autor::class,
        ]);
    }
}
