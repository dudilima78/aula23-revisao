<?php
include "menusup.php";
?>
<body>

<br><br>

	<main class="site-faleconosco" ng-controller="FaleController as faleCtrl"> 
		<section ng-hide="faleCtrl.success" class="section-padding-default">
    <div class="container">
				<div class="row bloco-conteudo">				
					<div class="col-sm">
						<div class="col-sm-12 col-lg-6 col-xl-4" >
						</div>
					</div>
				</div>
				
				<form name="formFale" class="needs-validation" novalidate data-ng-if="fale.assunto && fale.assunto.descricao !== 'Suporte Login'">			
					<div class="form-conteudo">						
						<div class="callout top-padding">
							<div class="form-conteudo row">
								<div class="col-sm-12 col-lg-6 col-xl-4">
									<h4>
										<label for="nome"> Nome completo </label>
									</h4>
									<input type="text" name="nome" placeholder="Nome Sobrenome" ng-model="fale.nomeSolicitante"
										required>
									<div data-ng-show="formFale.nome.$touched && formFale.nome.$error.required" class="invalid-feedback">Campo obrigatório</div>
								</div>
		
								<div class="col-sm-12 col-lg-6 col-xl-4">
									<h4>
										<label for="email"> E-mail </label>
									</h4>
									<input type="text" name="email" placeholder="Informe seu e-mail" ng-model="fale.emailSolicitante"
										required>
									<div data-ng-show="formFale.email.$touched && formFale.email.$error.required" class="invalid-feedback">Campo obrigatório</div>
								</div>
		
								<div class="col-sm-12 col-lg-6 col-xl-4">
									<h4>
										<label for="telefone"> Telefone </label>
									</h4>
									<input type="text" name="telefone" ng-model="fale.telefoneSolicitante"
										placeholder="Informe seu telefone" required mask="(99) 9?9999-9999" clean="true" mask-validate="false">
									<div data-ng-show="formFale.telefone.$touched && formFale.telefone.$error.required" class="invalid-feedback">Campo obrigatório</div>
								</div>
							</div>
							<div class="form-conteudo row" ng-controller="BaseUnicaListagemUfMunicipioController as listagemEnderecoCtrl">
								<div class="col-sm-12 col-lg-6 col-xl-4"><br>
									<h4>
										<label for="cpf"> CPF </label>
									</h4>
									<input type="text" name="cpf" placeholder="Informe seu CPF" ng-model="fale.cpfSolicitante"
										required mask="999.999.999-99" >
									<div data-ng-show="formFale.cpf.$touched && formFale.cpf.$error.required" class="invalid-feedback">Campo obrigatório</div>
								</div>
								
							</div>
              <br>
									<h4>
										<label for="nome"> Mensagem </label>
									</h4>
									<textarea name="mensagem" id="mensagem" ng-model="fale.mensagem"
										placeholder="Escreva sua mensagem" required></textarea>
									<div data-ng-show="formFale.mensagem.$touched && formFale.mensagem.$error.required" class="invalid-feedback">Campo obrigatório</div>
								</div>
							</div>
		
						</div>
					</div>
          <div class="container">
					<div class="row">
 						<div class="col-sm-12 col-xl-4 text-center"> 
							<div class="recaptcha-senac" >
								<div vc-recaptcha on-success="faleCtrl.setResponseRecaptcha(response)"></div>								
								<div ng-show="recaptchaMessage" style="display:block" class="invalid-feedback">Campo obrigatório</div>
							</div>
						</div> 
					</div>
		<br><br>
					<div class="row">
						<div class="col-sm-12 col-xl-4">
							<button class="btn btn-primary btn-lg" type="button" data-ng-click="faleCtrl.salvar(formFale)">
								Enviar mensagem
							</button>
						</div> 
					</div>
		
				</form>
			</div>		

	</main>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

	</body>
</html>
