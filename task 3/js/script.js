const display = document.getElementById('display');
        const buttons = document.querySelectorAll('.buttons button');

        buttons.forEach(btn => {
            btn.addEventListener('click', () => {
                const value = btn.getAttribute('data-value');
                const action = btn.getAttribute('data-action');
                if (action === 'clear') {
                    display.value = '';
                } else if (action === 'equal') {
                    calculate();
                } else if (value) {
                    display.value += value;
                }
            });
        });

        function calculate() {
            let expr = display.value;
            try {
                if (/^[0-9+\-*/.() ]+$/.test(expr)) {
                    let result = Function('return ' + expr)();
                    if (typeof result === 'number' && !isNaN(result)) {
                        display.value = result
                            .toString()
                            .replace(/(\.\d*?)0+$/, '$1')
                            .replace(/\.$/, '');
                    } else {
                        display.value = 'Error';
                    }
                } else {
                    display.value = 'Error';
                }
            } catch {
                display.value = 'Error';
            }
        }
        document.addEventListener('keydown', (e) => {
            if (e.key >= '0' && e.key <= '9') {
                display.value += e.key;
            } else if (['+', '-', '*', '/','.'].includes(e.key)) {
                display.value += e.key;
            } else if (e.key === 'Enter') {
                calculate();
            } else if (e.key === 'Backspace') {
                display.value = display.value.slice(0, -1);
            } else if (e.key.toLowerCase() === 'c') {
                display.value = '';
            }
        });