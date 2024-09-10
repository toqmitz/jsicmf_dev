<?php

namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;

class InquiryForm extends Form
{

    protected function _buildSchema(Schema $schema): Schema
    {
        return $schema->addField('name', 'string')
            ->addField('email', ['type' => 'string'])
            ->addField('body', ['type' => 'text']);
    }

    //    protected function _buildValidator(Validator $validator): Validator
    /*    public function validationDefault(Validator $validator): Validator
    {
        $validator->add('name', 'length', [
                'rule' => ['minLength', 10],
                'message' => '名前は必須です'
            ])->add('email', 'format', [
                'rule' => 'email',
                'message' => '有効なメールアドレスが要求されます',
            ]);
 
        return $validator;
    }
 */

    protected function _execute(array $data): bool
    {
        // メールを送信する
        return true;
    }
}
