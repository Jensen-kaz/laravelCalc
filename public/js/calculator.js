
$(document).ready(function() {
    var calculator = {

        displayCalc: '.jsCalculatorDisplay',
        buttons: '.jsBtn',
        cancelBtn: '.jsBtnCancel',
        plusBtn: '.jsBtnPlus',
        minusBtn: '.jsBtnMinus',
        multiplyBtn: '.jsBtnMultiply',
        divisionBtn: '.jsBtnDivision',
        equalBtn: '.jsBtnEqual',
        $displayCalc: null,
        $buttons: null,
        $cancelBtn: null,
        $plusBtn: null,
        $minusBtn: null,
        $multiplyBtn: null,
        $divisionBtn:null,
        $equalBtn: null,
        $calculator: null,
        a: [],
        b: [],
        expression: null,



        init: function ($calculator) {
            this.$calculator = $calculator;
            this.$displayCalc = $calculator.find(this.displayCalc);
            this.$buttons = $calculator.find(this.buttons);
            this.$cancelBtn = $calculator.find(this.cancelBtn);
            this.$plusBtn = $calculator.find(this.plusBtn);
            this.$minusBtn = $calculator.find(this.minusBtn);
            this.$multiplyBtn = $calculator.find(this.multiplyBtn);
            this.$divisionBtn = $calculator.find(this.divisionBtn);
            this.$equalBtn = $calculator.find(this.equalBtn);

            this.initEvents()
        },

        initEvents: function () {
            var self = this;

            this.$buttons.on('click','button', function () {
                var value = $(this).attr('value');

                if (value == '=') {
                    self.equal();
                } else {
                    self.addOnMemory(value);
                }
            });

            this.$cancelBtn.on('click', function () {
                self.reset();
                self.clearDisplay();
            });

        },

        addOnMemory: function (value) {
            var self = this;

            switch(value) {
                case '+':
                case '-':
                case '*':
                case '/':
                    // self.a = [];
                    // self.a.push(self.$displayCalc.val());
                    self.expression = value;
                    self.clearDisplay();
                    break;
            }

            if (self.expression != null && value != self.expression) {
                self.b.push(value);
                self.$displayCalc.val(self.b.join(''));
            }
            if (self.expression == null) {
                self.a.push(value);
                self.$displayCalc.val(self.a.join(''));
            }
        },

        reset: function () {
            var self = this;

            self.a = [];
            self.b = [];
            self.expression = null;
        },

        clearDisplay: function () {
            var self = this;
            self.$displayCalc.val('');
        },

        equal: function () {
            var self = this;



            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/calculator/exec',
                type: 'POST',
                data: {
                    a: self.a.join(''),
                    expression: self.expression,
                    b: self.b.join(''),
                },
                success: function (data) {
                    self.$displayCalc.val(data.result);
                },
                complete: function () {
                    self.reset();
                },
                error: function (data) {
                    console.log(data);
                }
            });
        }
    };

    var $calculatorBlock = $('.calculator-main');
    calculator.init($calculatorBlock);
});



