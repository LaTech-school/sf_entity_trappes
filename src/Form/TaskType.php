<?php

namespace App\Form;

use App\Entity\Task;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            // Name
            ->add('name', TextType::class, [
                // Texte de la balise <label>
                'label' => "Entrer le nom de la tâche",

                // Modification des attributs de la balise <label>
                'label_attr' => [
                    'class' => "my-custom-class"
                ]
            ])

            // Create At
            ->add('createAt')

            // Complete At
            ->add('completeAt')

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Task::class,
        ]);
    }
}
