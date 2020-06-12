<article>
    <div class="cursos-item" onclick="modal.openModal(this)" data-modal="md-formacao-dotnet-alura">
        <span class="tab tab-curso"><?= langs('label.Curso'); ?></span>
        <header>
            <h2><?= langs('cursos.titleFormacaoC'); ?></h2>
            <figure>
                <img src="images/icones/083-video-conference.png" alt="<?= langs('cursos.titleFormacaoC'); ?>"/>
            </figure>
            <div class="overlay">
                <div class="text"><i class="fas fa-plus-circle"></i><?= langs('links.Informacao'); ?></div>
            </div>
        </header>
    </div>
    <div id="md-formacao-dotnet-alura" class="modal md-small md-azul-2">
        <div class="modal-content">
            <span class="close" onclick="modal.closeModal(this)">
                <i class="fas fa-times"></i>
            </span>
            <h3 class="modal-header"><img src="images/icones/083-video-conference.png"/> <?= langs('cursos.titleFormacaoC'); ?></h3>
            <div class="row">
                <div class="cl-12">
                    <p>Conclui a Formação .NET na plataforma Alura, onde realizei diversos cursos referentes a linguagem C# e também a plataforma .NET.</p>
                    <p>Estes cursos me ajudaram a ter um conhecimento melhor sobre os conceitos e paradigmas do .NET, tanto na parte de desenvolvimento, boas práticas e testes.</p>
                    <span class="span">Lista de cursos:</span>
                    <ul class="list list-projetos li-block">
                        <li>C# parte 1: Primeiros passos</li>
                        <li>C# parte 2: Introdução à Orientação a Objetos</li>
                        <li>C# parte 3: Entendendo herança e interface</li>
                        <li>C# parte 4: Entendendo exceções</li>
                        <li>C# parte 5: Bibliotecas DLLs, documentação e usando o NuGet</li>
                        <li>C# parte 6: Strings, expressões regulares e a classe Object</li>
                        <li>C# parte 7: Array e tipos genéricos</li>
                        <li>C# parte 8: List &lt;T&gt;, lambda, linq</li>
                        <li>C# Parte 9: Entrada e saída (I/O) com streams</li>
                        <li>Asp.NET Core: Uma webapp usando o padrão MVC</li>
                        <li>ASP.NET Core parte 1: Um e-Commerce com MVC e EF Core</li>
                        <li>ASP.NET Core parte 2: Um e-Commerce com MVC e EF Core</li>
                        <li>ASP.NET Core Parte 3: Identity</li>
                        <li>ASP.NET Core Parte 4: IdentityServer</li>
                        <li>NHibernate: Persistência de dados com C#</li>
                        <li>Entity Framework Core: Banco de dados de forma eficiente</li>
                        <li>C#: Testes de unidade e TDD com xUnit</li>
                        <li>Mocks em C#: Testes de Integração com xUnit e Moq</li>
                        <li>Design Patterns C# I: Boas práticas de programação</li>
                        <li>Design Patterns C# II: Boas práticas de programação</li>
                        <li>SOLID com C#: Orientação a Objetos com C#</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</article>