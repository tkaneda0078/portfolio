<?php
declare(strict_types=1);

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
  /**
   * @param FormBuilderInterface $builder
   * @param array $options
   */
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
        ->add('name', TextType::class, [
            'label' => 'お名前',
            'attr'  => ['class' => 'form-control'],
        ])
        ->add('email', EmailType::class, [
            'label' => 'Email',
            'attr'  => ['class' => 'form-control'],
        ])
        ->add('detail', TextareaType::class, [
            'label' => 'お問い合わせ内容',
            'attr'  => [
                'class' => 'form-control',
                'rows' => '5'
            ],
        ])
        ->add('submit', SubmitType::class, [
            'label' => '送信',
            'attr'  => ['class' => 'btn btn-primary'],
        ])
    ;
  }

  /**
   * @param OptionsResolver $resolver
   */
  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setDefaults([
        'data_class' => Contact::class,
    ]);
  }
}