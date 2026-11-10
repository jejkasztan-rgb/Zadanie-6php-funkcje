<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zestaw Funkcji</title>
</head>
<body>

    <script>
        // 1. SUMA
        function suma(a, b) {
            console.log(a + b);
        }

        // 2. PODSTAWY
        function podstawy(a, b) {
            let roznica = a - b;
            let iloczyn = a * b;
            let iloraz = (b !== 0) ? a / b : "Nie można dzielić przez zero";
            console.log("Różnica: " + roznica + ", Iloczyn: " + iloczyn + ", Iloraz: " + iloraz);
        }

        // 3. KALKULATOR
        function kalkulator(dzialanie, a, b) {
            let wynik = 0;
            switch(dzialanie) {
                case 'suma': wynik = a + b; break;
                case 'roznica': wynik = a - b; break;
                case 'iloczyn': wynik = a * b; break;
                case 'iloraz': wynik = b !== 0 ? a / b : 'Błąd (dzielenie przez 0)'; break;
            }
            document.getElementById('wynik').innerText = wynik;
        }

        // 4. MAKS
        function maks(a, b, c) {
            console.log(Math.max(a, b, c));
        }

        // 5. WZROST
        function wzrost(wzrostCm) {
            if (wzrostCm < 150) {
                console.log("Niski");
            } else if (wzrostCm > 180) {
                console.log("Wysoki");
            } else {
                console.log("Średni");
            }
        }

        // 6. BMI
        function bmi(wzrostCm, waga) {
            let wzrostM = wzrostCm / 100;
            let wynikBmi = waga / (wzrostM * wzrostM);
            let komunikat = "";
            
            if (wynikBmi < 18.5) {
                komunikat = " za mało!";
            } else if (wynikBmi > 25) {
                komunikat = " za dużo!";
            } else {
                komunikat = " OK!";
            }
            
            document.getElementById('wynik').innerText = "BMI: " + wynikBmi.toFixed(2) + " -" + komunikat;
        }

        // 7. STARSZY
        function starszy(data1, data2) {
            let t1 = new Date(data1).getTime();
            let t2 = new Date(data2).getTime();
            
            if (t1 < t2) {
                console.log("Osoba pierwsza jest starsza.");
            } else if (t1 > t2) {
                console.log("Osoba druga jest starsza.");
            } else {
                console.log("Obie osoby są w tym samym wieku.");
            }
        }

        // 8. PRZESTĘPNY
        function przestępny(rok) {
            if ((rok % 4 === 0 && rok % 100 !== 0) || (rok % 400 === 0)) {
                console.log("Rok " + rok + " jest przestępny.");
            } else {
                console.log("Rok " + rok + " nie jest przestępny.");
            }
        }

        // 9. SIŁA
        function silaHasla(haslo) {
            let dlugosc = haslo.length;
            let hasCyfre = /[0-9]/.test(haslo);
            let hasDuza = /[A-Z]/.test(haslo);
            let hasMala = /[a-z]/.test(haslo);
            let hasSpecjalny = /[\W_]/.test(haslo);

            if (dlugosc <= 4 || !hasCyfre || !hasDuza || !hasMala || !hasSpecjalny) {
                console.log("Hasło słabe");
            } else if (dlugosc <= 8) {
                console.log("Hasło średnie");
            } else {
                console.log("Hasło mocne");
            }
        }

        // 10. TROJKAT
        function trojkat(a, b, c) {
            if (a + b > c && a + c > b && b + c > a) {
                console.log("Da się utworzyć trójkąt.");
            } else {
                console.log("Nie da się utworzyć trójkąta.");
            }
        }

        // 11. SZYFR
        function szyfrujTekst(input) {
            let wynik = "";
            for (let i = 0; i < input.length; i++) {
                let code = input.charCodeAt(i);
                if (code >= 97 && code <= 122) {
                    code = ((code - 97 + 2) % 26) + 97;
                } else if (code >= 65 && code <= 90) {
                    code = ((code - 65 + 2) % 26) + 65;
                }
                wynik += String.fromCharCode(code);
            }
            return wynik;
        }
    </script>
</body>
</html>
