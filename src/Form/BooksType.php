<?php

namespace App\Form;

use App\Entity\Books;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;

class BooksType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) : void
    {
        $builder
            ->add('author', TextType::class, [
                "attr" => [
                    "placeholder" => "Author",
                    "pattern" => "([a-zA-Z]){2,125}+",
                    "class" => "border-solid border-gray-400 border-2 p-3 md:text-xl w-full"
                ],
                "invalid_message" => 'Данные не верные',
                'constraints' => [
                    new Length([
                        'min' => 3,
                        'max' => 55,
                        'minMessage' => 'Размер имени должен быть минимум 6',
                        'maxMessage' => 'Размер имени должен быть максимум 55'
                    ])
                ]
            ])
            ->add('year', TextType::class, [
                "attr" => [
                    "maxlength" => 4,
                    "placeholder" =>"Year of production",
                    "pattern" => "[0-9]{1, 4}",
                    "class" => "border-solid border-gray-400 border-2 p-3 md:text-xl w-full"
                ],
            ])
            ->add('title', TextareaType::class, [
                "attr" => [
                    "cols" => 30,
                    "rows" => 8,
                    "maxlength" => 75,
                    "minlength" => 4,
                    "placeholder" => "Title book",
                    "class" => "border-solid border-gray-400 border-2 p-3 md:text-xl w-full"
                ],
                "invalid_message" => 'Данные не верные',
                'constraints' => [
                    new Length([
                        'min' => 4,
                        'max' => 75,
                        'minMessage' => 'Размер имени должен быть минимум 4',
                        'maxMessage' => 'Размер имени должен быть максимум 75'
                    ])
                ]
            ])
        ;
        ;
    }

    public function configureOptions(OptionsResolver $resolver) : void
    {
        $resolver->setDefaults([
            'data_class' => Books::class,
        ]);
    }
}
