@extends('layouts.app')

@section('content')
<div class=cadastrar>
        <h4 class="cadastro">Cadastro</h4>

        <h4 class="endereco-entrega">Endereco de Entrega</h4>

        <form class="validacao" novalidate="">
          <div class="1">
            <div class="11">
              <x-input name="nome" :label="['text' => 'Primeiro Nome']"/>
            </div>

            <div class="11">
              <x-input name="sobrenome" :label="['text' => 'Sobrenome']" required/>
            </div>

            <div class="11">
              <label for="usuario">Nome de Usuario</label>
              <input type="text" id="usuario" placeholder="Nome de Usuario" required="">
              <div class="invalid-feedback" style="width: 100%;"> Seu nome de usuario e necessario! </div>
            </div>

            <div class="11">
              <x-input
                name="email" :label="['text' => 'E-mail']" type="email" placeholder="voce@email.com"
              />
            </div>

            <div class="11">
              <x-input
                name="logradouro" :label="['text' => 'Logradouro']" placeholder="Rua dos codigos, 1010"
              />
            </div>

            <div class="11">
              <x-select
                  class="blocodeselecao" name="estado" :label="['text' => 'Estado']" :options="['Selecione..', 'Pernambuco']"
              />
            </div>

            <div class="11">
              <x-select
                class="blocodeselecao" name="pais" :label="['text' => 'Pais']" :options="['Selecione...', 'Brasil']"
              />
            </div>

            <div class="11">
              <x-input name="cep" :label="['text' => 'CEP']" />
            </div>

            <hr class="linha">

            <h4 class="pagamento">Pagamento</h4>

            <div class="selecao">
                <x-radio name="metododepagamento" id="credito" :label="['text' => 'Cartao de Credito']" />

                <x-radio name="metododepagamento" id="debito" :label="['text' => 'Cartao de Debito']" />

                <x-radio name="metododepagamento" id="pix" :label="['text' => 'Pix']" />
            </div>

            <div class="11">
                <x-input name="nomedocartao" help="Nome completo assim como esta no cartao!" :label="['text' => 'Nome do Cartao']" />
            </div>

            <div class="11">
                <x-input name="numerodocartao" :label="['text' => 'Numero do Cartao de Credito']" />
            </div>

            <div class="11">
                <x-input name="datadeexpiracao" :label="['text' => 'Data de Expiracao']" />
            </div>

            <div class="11">
                <x-input name="cvv" :label="['text' => 'CVV']" />
            </div>

            <hr class="linha">

            <button class="botaocompra" type="submit">Finalizar Compra</button>
          </div>
        </form>
</div>
@endsection