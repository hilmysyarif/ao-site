<footer>
    <a href="{{ route('org.about') }}">Quem Somos</a> &bull;
    <a href="{{ route('org.team') }}">Equipe</a> &bull;
    <a href="{{ route('org.faq') }}">Perguntas Frequêntes</a> &bull;
    <a href="{{ route('org.policies') }}">Políticas de Privacidade</a> &bull;
    <a href="{{ route('org.terms') }}">Termos de Serviço</a> &bull;
    <a href="{{ route('org.contact') }}">Contato</a>

    <br />

    <sub><a href="http://{{ env('APP_DOMAIN') }}">{!! env('APP_TITLE_HTML') !!}</a> &reg; 2015 &bull; Todos os direitos reservados.</sub>
</footer>