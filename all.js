function edit() {
	editor.setTheme("ace/theme/twilight");
        editor.session.setMode("ace/mode/php");
        editor.session.setValue('<?php\n\n$a = 1;\n\necho 420*$a;');

}

function reset() {
	editor.session.setValue('<?php\n\n$a = 1;\n\necho 420*$a;');
}

function compile(editor) {
        $.post( "execute.php", { codigo: editor.getValue() }, function( data ) {
        $("#result").html(data.replace(/\n/g, "<br>"));
        });
}

function Compara(a,b) {
        if(a==b) {return true;}
        else {return false;}
}