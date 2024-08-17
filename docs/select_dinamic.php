<select id="benua">
    <option value="1" selected>Silakan Pilih</option>
    <option value="2">Asia</option>
    <option value="3">Eropa</option>
    <option value="6">Afrika</option>
</select>


<select id="negara">
    <option data-kategori="1" selected>Silakan Pilih</option>
    <option data-kategori="2">Tiongkok</option>
    <option data-kategori="2">Jepang</option>
    <option data-kategori="2">Korea Selatan</option>
    <option data-kategori="3">Prancis</option>
    <option data-kategori="3">Belanda</option>
    <option data-kategori="6">Madagaskar</option>
    <option data-kategori="6">Ghana</option>
</select>


<script>
   const benua = document.getElementById('benua');
    benua.addEventListener('change', fungsiSaya);

        function fungsiSaya(event){
        let selekBenua = event.target.value;
        let negara = document.getElementById('negara').options;
                                    
        for (let i = 0; i < negara.length; i++) {

            let seleksNegara = negara[i].getAttribute('data-kategori');

            if (seleksNegara === selekBenua) {
                negara[i].style.display = '';
            } else {
                negara[i].style.display = 'none';
            }
        }
    }
</script>








