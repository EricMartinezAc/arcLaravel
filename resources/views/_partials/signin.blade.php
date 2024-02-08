    @component('_components.inputs')
        @slot('labelClass', 'label')
        @slot('for', 'arg_numId')
        @slot('labelName', 'Identiciaciòn por favor' )
        @slot('inputId', 'arg_numId')
        @slot('inputClass', 'input')
        @slot('inputType', 'text')
        @slot('inputName', 'arg_numId')
        @slot('inputValue')
            ''
        @endslot
        @slot('inputACompt', 'off')
        @slot('inputPlcHdr', 'Ingrese aqui su Identificaciòn')
    @endcomponent
    <label class="label" for="arg_psw">Contraseña</label>
    <input id="arg_psw" class="input" type="password" name="arg_psw" value="" autocomplete="off" placeholder="*******"><br>
    <input class="button" type="submit" value="INGRESAR">