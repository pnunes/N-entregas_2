<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo.css">
    <title>Pagina Inicial</title>
</head>
<body>
    <header>  
        <nav class="navbar navbar-default" id="menu">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" 
				data-target="#collapse-navbar" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><b>Transportes Free Jazz</b></a>
			</div>
			<div class="collapse navbar-collapse col-lg-6" id="collapse-navbar">
				<ul class="nav navbar-nav mr-auto">
					<li><a href="#sobre-nos">Sobre Nós</a></li>
					<li><a href="#nossos-servicos">Nossos Serviços</a></li>
					<li><a href="#onde-estamos">Localização</a></li>
					<li><a href="#contato">Contato</a></li>
					<li><a href="#login" id="login"><img src="img/login_sistema.png"></a></li>
					<li><a href="#app_baixa" id="bt_baixa_app"><img src="img/celular_v_cel.png"></a></li>
				</ul>
			</div>
		</nav>
		<div class="container freejazz-bannerWrapper">
			<div class="freejazz-banner">
				<h1>Transportes Free Jazz Ltda</h1>
				<p>Prestando serviços de qualidade desde 1980.</p>
				<button id="bt_rastrear" class="btn btn-primary btn-lg">Rastrear</button>
			</div>
		</div>
		<!--formulario para baixa do app -->
		<div id="form_baixa" class="row">
		    <form name="form1" action="baixar_app.php" method="post">    
				<div id="dados_baixa">
					<input type="text" name="usua" size="15" maxlength="15" id="usua" placeholder="Usuario">
					<input type="password" name="sena" size="15" maxlength="15" id="sena" placeholder="senha">
					<button type="submit" class="btn btn-default" id="input_baixar">Baixa App</button>
				</div>
		    </form>
		</div>		
		<!--formulario para entrada no sistema -->
		<div id="form_acesso" class="row">
		     <form name="form0" action="confere_acesso.php" method="post" id="">
				<div id="acesso" class="form-group">
					<input type="text" class="form-control" name="usuario" size="15" maxlength="15" id="usuario" placeholder="usuario"/>
					<input type="password" class="form-control" name="senha" size="15" maxlength="15" id="senha" placeholder="senha"/>
					<button type="submit" class="btn btn-default" id="input_entrar">Entrar</button>
				</div>
		     </form>
		</div>
    </header>
	<section id="sobre-nos">
	    <div id="div-sn">Sobre Nós</div>
	    <div id="texto-sobrenos" class="container">
			<p class="texto-sn">Há mais de dez anos no mercado, a TRANSPORTES FREE JAZZ LTDA-ME está instalada 
			em Curitiba/PR atendendo todo o mercado paranaense, e, através de seus parceiros, atua fortemente no 
			estado de Santa Catarina. Somos uma empresa de soluções integradas em logística e serviços personalizados.
			Formada por duas divisões, atua na prestação de serviços de manuseio, 
			coleta e entregas, agregando valor pela segurança, tendo seus processos todos computadorizados. 
			Oferece também mão de obra especializada para execução de serviços especializados de acordo com a necessidade de seus clientes.</p>
			<p class="texto-sn">Oferecemos soluções específicas para o atendimento das necessidades de cada 
			negócio, com alto nível de eficácia, adequando e otimizando os serviços, para que os mesmos ocorram 
			em tempo, condições e formas desejadas. Buscando sempre a excelência na prestação de serviços, 
			nossas soluções contribuem positivamente com os resultados dos nossos clientes.</p>
			
			<p class="texto-sn">Para garantir o sucesso do transporte da partida até o destino 
			final, a TRANPORTES FREE JAZZ LTDA-ME conta com métodos sofisticados e modernos de atendimento e 
			desenvolvimento de projetos, primando pela eficiência em todos os detalhes. Para que tudo isso ocorra, 
			temos uma equipe de profissionais altamente capacitados e qualificados a atuar em todas as atividades 
			logísticas e de prestação de serviços.</p>
		</div>							
    </section>
	<section id="nossos-servicos">
		<div class="container" id="texto-nossos-servicos">
			<div id="div-serv">Nossos Serviços</div>
			<br>
			<p class="texto-servico">Preocupada em proporcionar aos seus clientes soluções logísticas adequadas às 
			necessidades específicas, a TRANPORTES FREE JAZZ LTDA-ME oferece diversos formatos para a melhor 
			utilização de sua estrutura, bem como otimização de seus serviços. Para tal, dispomos de motocicletas 
			e veículos, que devem ser adequados a cada tipo de serviço. Além disso, acreditamos que a excelência 
			de nossa prestação de serviços seja conseqüência direta da maneira como tratamos as particularidades 
			de cada operação, por isso, além dos serviços aqui descritos, nos comprometemos em oferecer qualquer 
			solução logística que seja por ventura mais adequada.</p>

			<p class="texto-servico">Primamos pelo bom desempenho do nosso trabalho, bem como pela maximização 
			dos esforços dos clientes, visando contribuir de maneira positiva e eficaz com o desempenho das 
			atividades logísticas executadas.</p>
			<br>
			<div class="row" id="descricao-servicos">
				<div class="col-sm-6" id="coluna_1">	
					<p id="serv-parag-3" class="glyphicon glyphicon-ok item-servico"> Manuseio de documentos e/ou correspondências;</p>
					<p id="serv-parag-4" class="glyphicon glyphicon-ok item-servico"> Manuseio de vales transportes, brindes e produtos;</p>
					<p id="serv-parag-5" class="glyphicon glyphicon-ok item-servico"> Transporte de malotes;</p>
					<p id="serv-parag-6" class="glyphicon glyphicon-ok item-servico"> Coleta, transporte e entrega de documentos (ou similares);</p>
					<p id="serv-parag-7" class="glyphicon glyphicon-ok item-servico"> Serviços de coleta, transporte e entrega de cargas (utilizando-se de utilitários);</p>
				</div>
				<div class="col-sm-6" id="coluna_2">
					<p id="serv-parag-8" class="glyphicon glyphicon-ok item-servico"> Entregas departamentalizadas e Monitoradas;</p>
					<p id="serv-parag-9" class="glyphicon glyphicon-ok item-servico"> Veículos exclusivos (cargas expressas / Urgentes);</p>
					<p id="serv-parag-10" class="glyphicon glyphicon-ok item-servico"> Entregas urgentes (pequeno porte);</p>
					<p id="serv-parag-11" class="glyphicon glyphicon-ok item-servico"> Serviços de guarda de Malotes, Documentos e Brindes;</p>
					<p id="serv-parag-12" class="glyphicon glyphicon-ok item-servico"> Entre outros.</p>
				</div>
				<!--<p id="serv-parag-13" style="font-size: 16px; color: red; font-weight: 700; text-align: center;"> TRABALHO COMO PROGRAMADOR DESDE 1986 </P>-->
			</div>
		</div>
    </section>
	<section id="onde-estamos">
		<div class="container" id="texto-onde-estamos">
		    <div id="div-oe">Localização</div>
			<div id="endereco">
			    <p id="ende-cidade">Curitiba - PR</p>
				<p id="ende-rua" class="detalhe-ende">Rua Conselheiro Laurindo, 809</p>
				<p id="ende-rua" class="detalhe-ende">Sala 704 - Centro</p>
				<p id="ende-comple" class="detalhe-ende">Curitiba - Paraná</p>
				<p id="ende-cep" class="detalhe-ende">CEP 80060-100</p>
			</div>
			<div id="mapa">
				<iframe width="90%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
				src="http://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;
				q=Rua+Conselheiro+Laurindo,+809,+Curitiba+-+Paran%C3%A1&amp;sll=-14.239424,-53.186502&amp;
				sspn=44.966072,79.013672&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Conselheiro+Laurindo,
				+809+-+Centro,+Curitiba+-+Paran%C3%A1,+80060-100&amp;t=m&amp;ll=-25.433819,-49.263296&amp;
				spn=0.019921,0.032959&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small>
					<a href="http://maps.google.com.br/maps?f=q&amp;source=embed&amp;hl=pt-BR&amp;
					geocode=&amp;q=Rua+Conselheiro+Laurindo,+809,+Curitiba+-+Paran%C3%A1&amp;sll=-14.239424,
					-53.186502&amp;sspn=44.966072,79.013672&amp;ie=UTF8&amp;hq=&amp;
					hnear=R.+Conselheiro+Laurindo,+809+-+Centro,+Curitiba+-+Paran%C3%A1,+80060-100&amp;
					t=m&amp;ll=-25.433819,-49.263296&amp;spn=0.019921,0.032959&amp;z=14&amp;iwloc=A" 
					style="color:#0000FF;text-align:left">Exibir mapa ampliado</a></small></div>
			</div>		
		</div>
    </section>
	<section id="contato">
		<div id="dados-contato">
			<div id="div-titulo-contato">Contato</div>
			<br>
			<div class="col-sm-3" id="div-dados-contato_1">
				<br>
				<p class="fones-contato cidade">Curitiba /PR - CEP: 80060-100</p><br>
				<p class="fones-contato outros"><b>Fone:</b> (48)7811 3160</p><br>
				<p class="fones-contato outros"><b>Email:</b> contato@transportesfj.com.br</p>
			</div>
			<div class="col-sm-3" id="div-dados-contato_2">
				<p class="fones-contato outros"><b>Curitiba/PR:</b></p>
				<p class="fones-contato outros">Fixo:(41)3078 6864</p>
				<p class="fones-contato outros">Cel: (41)7814 9150</p>
				<p class="fones-contato outros">Nextel 80*44343</p>
			</div>
			<div class="col-sm-3" id="div-dados-contato_3">
				<p class="fones-contato outros"><b>São José/SC:</b></p>
				<p class="fones-contato outros">Fixo:(48)3034 3160</p>
				<p class="fones-contato outros">Cel: (48)7811 3160</p>
				<p class="fones-contato outros">Nextel 80*44340</p>	
			</div>
			<div class="col-sm-9" id="div-form-contato">
				<form action="envia_email.php"  role="form" method="post">	
						<label for="nome">Nome</label>
						<div class="input-group col-lg-10">
							<input class="form-control" type="text" name="nome" id="nome" placeholder="Nome">
						</div>
						<label for="email">Email</label>
						<div class="input-group col-lg-10">
						<span class="input-group-addon">@</span>  
							<input type="email" id="email" name="email" class="form-control" placeholder="Email">
						</div>
						<label for="telefone">Telefone</label>
						<div class="input-group col-lg-10">  
							<input type="text" id="telefone" name="telefone" class="form-control" placeholder="Telefone com codigo de area">
						</div>
						<label for="mensagem">Mnesagem</label>
						<div class="input-group col-lg-10">  
							<textarea id="mensagem" name="mensagem" class="form-control" cols="60" rows="4" placeholder="Mensagem"></textarea>
						</div>
						<button class="btn btn-primary" type="submit" id="btn-enviar">Enviar</button>
				</form>
			</div>
		</div>
    </section>
	<a href="#" id="seta">
		<div id="volta_topo">
		   &#9650;
		</div>
	</a>
	<footer>
		<address>
			<strong>Transportes Free Jazz Ltda</strong><br>
			Rua Conselheiro Laurindo, 809<br>
			Curitiba - Centro - CEP:80060-100<br>
			Tel. (48)7811 3160
		</address>
		<address>
			Email:contato@transportesfj.com.br<br>
		</address>
	</footer>
    <script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/navbar-animation-fix.js"></script>
	<script>
	        /*Controla div para entrada de dados de acesso ao sistema*/
			var clique = document.getElementById("login");
			var div = document.getElementById("acesso");
			div.style.display = "none";
			clique.onclick = function (e) {
				 e.preventDefault();
				 if(div.style.display == "none") {
					div.style.display = "block";
				} else {
					div.style.display = "none";
				}
			};
			
			/*Controla div para dowload do aplicativo celular*/
			var clique_a = document.getElementById("bt_baixa_app");
			var div_a = document.getElementById("dados_baixa");
			div_a.style.display = "none";
			clique_a.onclick = function (e) {
				 e.preventDefault();
				 if(div_a.style.display == "none") {
					div_a.style.display = "block";
				} else {
					div_a.style.display = "none";
				}
			};
    </script>  
</body>
</html>