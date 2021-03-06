<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    Materialize.updateTextFields();
    $(".button-collapse").sideNav();
    $('.materialboxed').materialbox();

    @if (Session::has('mensagem'))
        @php
            $msg = Session::get('mensagem');
            echo "flashMessage('{$msg}')";
        @endphp
    @endif

    function flashMessage(mensagem){
        Materialize.toast(mensagem, 5000);
    }
});
</script>
</body>
</html>