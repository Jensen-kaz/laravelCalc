@extends('layouts/app')

@section('content')
<div class="calculator-main">
    <div class="calculator-display">
        <input class="calculator-display__input jsCalculatorDisplay" type="text" disabled >
        <button class="calculator-display__button-cancel jsBtnCancel"></button>
    </div>
    <div class="buttons jsBtn">
        <button class="buttons__button buttons__button_1" value=<?= $values[0] ?>></button>
        <button class="buttons__button buttons__button_2" value=<?= $values[1] ?>></button>
        <button class="buttons__button buttons__button_3" value=<?= $values[2] ?>></button>
        <button class="button_expression buttons__button_plus jsBtnPlus" value="+"></button>
        <button class="buttons__button buttons__button_4" value=<?= $values[3] ?>></button>
        <button class="buttons__button buttons__button_5" value=<?= $values[4] ?>></button>
        <button class="buttons__button buttons__button_6" value=<?= $values[5] ?>></button>
        <button class="button_expression buttons__button_minus jsBtnMinus" value="-"></button>
        <button class="buttons__button buttons__button_7" value=<?= $values[6] ?>></button>
        <button class="buttons__button buttons__button_8" value=<?= $values[7] ?>></button>
        <button class="buttons__button buttons__button_9" value=<?= $values[8] ?>></button>
        <button class="button_expression buttons__button_multiply jsBtnMultiply" value="*"></button>
        <button class="buttons__button buttons__button_0" value=<?= $values[9] ?>></button>
        <button class="button_expression buttons__button_equal jsBtnEqual" value="="></button>
        <button class="button_expression buttons__button_division jsBtnDivision" value="/"></button>
    </div>
</div>
@endsection
