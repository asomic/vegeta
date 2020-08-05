<template>
    <div >
        <div class=" form-inline ">
            <label class="m-2">Rut</label>
            <input type="text" name="user[rut]" v-rut:live v-model="rutInput">
            <button class="btn btn-success m-2 btn-sm" type="text" @click.prevent.self="rutSearch">Buscar</button>
            
        </div>
        <div class="card" v-if="rutValue">
            <div class="card-body">

                    <div v-if="rutValue">
                        <p><b>Rut:</b> {{rutValue}}    </p>
                        <input  v-model="rutValue" name="rut" hidden>
                        <p><b>Razon Social:</b> {{razonValue}}    </p>
                        <input  v-model="razonValue" name="razon" hidden>
                    </div>
                    <div v-if="giroValue">
                        <p><b>Giro:</b> {{giroValue}}  </p>
                        <input  v-model="giroValue" name="giro" hidden>
                    </div>
                    <button class="btn btn-success"> Guardar cliente</button>

            </div>
            
        </div>
    </div>
</template>

<script>
    import { rutInputDirective } from 'vue-dni';
    Vue.directive('rut', rutInputDirective);

    export default {
        props: {
            action: String,
        },
        data() {
            return {
                rutInput: '',
                rutValue: null,
                razonValue: null,
                giroValue: null,
            };
        }, 
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            rutSearch() {


                let rutNoDV = this.rutInput.toString().split('-')[0];
                let rut = rutNoDV.split('.').join('');
                console.log(rut);
                axios
                    .get('https://compshub.asomic.com/companies/' + rut)
                    .then(response => {
                        if(response.status== 200) {
                            this.rutValue = response.data.data.RUT;
                            this.razonValue = response.data.data.RazonSocial;
                        } else {
                            this.rutValue = null;

                            console.log('error rut');
                        }
                        
                    });
                axios
                    .get('https://compshub.asomic.com/companies/' + rut + '/activities')
                    .then(response => {
                        if(response.status== 200) {
                            this.giroValue = response.data.data[0].giro;
                        } else {
                            this.giroValue = null;
                            console.log('error giro');
                        }
                        
                    });
            }
        }
    }
</script>
