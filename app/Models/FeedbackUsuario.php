<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbackUsuario extends Model
{
    use HasFactory;
    protected $table = 'feedback_user';
    protected $fillable = ['user_id','email_contato','telefone','mensagem','motivo_contato'];

    public function rules(){
        return [
            'user_id' => 'required|exists:users,id',
            'email_contato' => 'required',
            'telefone' => 'required|min:10|max:11',
            'mensagem' =>'required|min:10|max:255',
            'motivo_contato' =>'required|exists:motivos_contatos,id'
           
        ];
    }
    public function feedback(){
        return  [
            'required' => 'O campo :attribute é obrigatório', 
            'telefone.max' =>'O telefone deve ter no máximo 11 números',         
            'telefone.min' =>'O telefone deve ter no mínimo 10 números',
            'mensagem.max' =>'A mensagem deve ter no máximo 255 caracteres',         
            'mensagem.min' =>'A mensagem deve ter no mínimo 5 caracteres',
            'motivo_contato.exists' =>'O motivo não existe'
        ];
    }


    public function motivos(){
        return $this->belongsTo('App\Models\MotivosContatos','motivo_contato');
    }



}
