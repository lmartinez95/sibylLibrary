<?php

namespace App\Form;

use App\Entity\Editorial;
use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Pais;
use Symfony\Component\Form\Extension\Core\Type As Tipos;
use Doctrine\ORM\EntityRepository;

class EditorialType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('edtNombre', null, ['required' => true, 'attr' => ['class' => 'form-control', 'placeholder' => 'Editorial'] ])
            ->add('edtTelefono', null, ['attr' => ['class' => 'form-control'] ])
            ->add('edtDireccion', null, ['required' => true, 'attr' => ['class' => 'form-control', 'placeholder' => 'Dirección'] ])
            ->add('paiId', EntityType::class, [
                'class' => Pais::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('p')
                        ->orderBy('p.paiNombre', 'ASC');
                },
                'choice_label' => 'painombre',
                'attr' => ['class' => 'form-control']
            ])
            ->add('btnAgregar', Tipos\SubmitType::class, ['attr' => ['class' => 'btn btn-primary']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Editorial::class,
        ]);
    }
}
