<?php

namespace App\Form;

use App\Entity\Producto;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\TipoProducto;
use App\Entity\CategoriaProducto;
use App\Entity\Editorial;
use App\Entity\Idioma;
use App\Entity\Autor;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type As Tipos;
use Doctrine\ORM\EntityRepository;

class ProductoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('proIsbnIssn', null, ['required' => true, 'attr' => ['class' => 'form-control', 'placeholder' => 'ISBN/ISSN'] ])
            ->add('proNombre', null, ['required' => true, 'attr' => ['class' => 'form-control', 'placeholder' => 'Título'] ])
            ->add('proEdicion', Tipos\NumberType::class, ['html5' => true, 'attr' => ['class' => 'form-control', 'min' => '1', 'step' => '1', 'value' => '1'] ])
            ->add('proNumpagina', Tipos\NumberType::class, ['html5' => true, 'attr' => ['class' => 'form-control', 'min' => '1', 'step' => '1', 'value' => '1'] ])
            ->add('proPublicLugar', null, [ 'attr' => ['class' => 'form-control', 'placeholder' => 'Lugar de Publicación'] ])
            ->add('proPublicAnio', Tipos\NumberType::class, ['html5' => true, 'attr' => ['class' => 'form-control', 'min' => '1900', 'step' => '1', 'value' => '1900', 'max' => '2020'] ])
            ->add('proVolumen', Tipos\NumberType::class, ['html5' => true, 'attr' => ['class' => 'form-control', 'min' => '1', 'step' => '1', 'value' => '1'] ])
            ->add('proNumEjemplar', Tipos\NumberType::class, ['html5' => true, 'attr' => ['class' => 'form-control', 'min' => '1', 'step' => '1', 'value' => '1'] ])
            ->add('proEmpastado', null, ['required' => true, 'attr' => ['class' => 'form-control', 'placeholder' => 'Tipo de pasta'] ])
            ->add('proPeso', Tipos\NumberType::class, ['html5' => true, 'attr' => ['class' => 'form-control', 'min' => '0.0', 'step' => '0.1', 'value' => '1.0'] ])
            ->add('proColeccion', null, ['attr' => ['class' => 'form-control', 'placeholder' => 'Editorial'] ])
            ->add('proDescripcion', Tipos\TextareaType::class, ['required' => true, 'attr' => ['class' => 'form-control', 'placeholder' => 'Descripción del material...'] ])
            ->add('tproId', EntityType::class, [
                'class' => TipoProducto::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('tp');
                },
                'choice_label' => 'tproNombre',
                'attr' => ['class' => 'form-control']
            ])
            ->add('cproId', EntityType::class, [
                'class' => CategoriaProducto::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('cp')
                        //->select('cp.cproId', 'cp.cproNombre')
                        ->where('cp.cproNombre <> :nulo')
                        ->setParameter('nulo', '');
                },
                'choice_label' => 'cproNombre',
                'attr' => ['class' => 'form-control']
            ])
            ->add('edtId', EntityType::class, [
                'class' => Editorial::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('e')
                        //->select('e.edtId', 'e.edtNombre')
                        ->orderBy('e.edtNombre', 'ASC');
                },
                'choice_label' => 'edtNombre',
                'attr' => ['class' => 'form-control']
            ])
            ->add('langId', EntityType::class, [
                'class' => Idioma::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('l')
                        ->orderBy('l.langNombre', 'ASC');
                },
                'choice_label' => 'langNombre',
                'attr' => ['class' => 'form-control']
            ])
            ->add('autid', EntityType::class, [
                'class' => Autor::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('a')
                        ->orderBy('a.autNombre', 'ASC');
                },
                'choice_label' => 'autNombre',
                'attr' => ['class' => 'form-control']
            ])
            ->add('submit', Tipos\SubmitType::class, ['attr' => ['class' => 'btn btn-primary']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Producto::class,
        ]);
    }
}
