<?php

namespace App\Form;

use App\Entity\Task;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            // Name
            ->add('name', TextType::class, [

                // Label
                // --

                // Texte de la balise <label>
                'label' => "Entrer le nom de la tâche",

                // Modification des attributs de la balise <label>
                'label_attr' => [
                    'class' => "my-custom-class"
                ],


                // Input
                // --

                // Rendre le champ obligatoire, ou non..
                'required' => true,

                // Modification des attibuts du champ html
                'attr' => [
                    // Ajouter des classes sur le champ html
                    // 'class' => "",

                    // Ajoute le Placeholder
                    'placeholder' => "Saisir votre tâche !!!"
                ],


                // Helper
                // --

                // Ajoute un texte d'aide pour l'utilisateur
                'help' => "Ceci est un texte d'aide pour l'utilisateur",

                // Modifie les attributs du Helper
                'help_attr' => [
                    // 'class' => "CLASS-FOR-MY-HELPER"
                ],


                // Contraintes / Controle de formulaire
                // --

                'constraints' => [
                    new NotBlank([
                        'message' => "Le champ est obligatoire"
                    ])
                ],

            ])

            // Create At
            // ->add('createAt')

            // Complete At
            // ->add('completeAt')


            // Creation d'un champ non référencé dans l'entité
            ->add('myCustomField', TextareaType::class, [

                // Le champ n'est pas "mapé" dans l'entité
                'mapped' => false
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Task::class,
        ]);
    }
}
