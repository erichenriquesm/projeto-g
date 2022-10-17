<template>
    <div id="body">
        <div class="d-flex">
            <menu-lateral class="col-1">
                <slot name="menu"></slot>

            </menu-lateral>

            <div style="margin: 0 auto;" class="body col-10">

                <div class="center">
                    <slot name="cont"></slot>
                </div>
            </div>
        </div>

        <modal>
            <div slot="modal_header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div slot="modal_body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4><strong>Links de Redirecionamento</strong></h4>
                        <p style="margin-top: 40px;">Crie seus links de direct em poucos passos</p>
                    </div>

                    <div>
                        <button type="button" style="width: 150px" class="btn-light-blue" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Criar um link</button>
                    </div>
                </div>

                <div class="row">
                    <div style="overflow-y:auto; height:100% " class="col col-5  link">
                        <div style="border-bottom: 1px solid #81858e91; margin-bottom: 10px;" class="d-flex justify-content-between align-items-center">
                            <h5 class="primary">{{mostrar.length}} links</h5>
                            <p style="margin-top: 10px;">Clique em tempo real</p>
                        </div>

                        <div v-for="(link) in mostrar" :key="link.nome_link" class="caixa" @click="redirect(link)">
                            <div>
                                <h5>{{link.nome_link}}</h5>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                            <p>{{link.link_hash}}</p>
                            <p>0/{{link.total_max_click}}</p>
                            </div>
                        </div>

                        
                    </div>

                    <div class="col col-7" >
                        <div v-for="link in linkEntrada" :key="link.nomeUrl" class="d-flex justify-content-between align-items-center">
                            <h3>{{link.nomeUrl}}</h3>
                            <p class="align-self-center"></p>

                        </div>

                        <div style="border-bottom: 1px solid #81858e91; padding-bottom: 15px;" class="d-flex align-items-center">
                            <p v-for="(link, index) in linkEntrada" :key="index" style="padding-right: 15px; margin-top: 10px" class="link">{{link.urlDefault}}</p>
                            <button class="btn-light-blue align-self-center">Copiar</button>
                            <button style="background-color: white; border: 1px solid #2133D2;"
                                class="btn-light-blue">Editar</button>
                        </div>

                        <div v-for="link in linkSaida" :key="link.link" style="height:fit-content; padding-bottom: 10px;" >
                                <div class="d-flex align-items-center">
                                    <h5 style="margin-top: 10px; margin-right: 5px;"><strong>{{index + 1}}</strong></h5>
                                    <p>{{link.link}}</p>
                                </div>

                                <p style="margin: 0;" class="primary">0/{{link.maxClick}}</p>
                        </div>
                    </div>

                </div>
                <!-- MENU LATERAL -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                    aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header bg-dark text-light">
                        <h5 class="offcanvas-title" id="offcanvasRightLabel">Criação de Link</h5>
                        <button @click="limpar()" type="button" class="btn-close bg-light" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div style="position: relative;" class="offcanvas-body">
                        <h5>Título do Link</h5>
                        <input v-for="link in linkEntrada" :key="link.id"  style="width: 250px;" type="text" name="tituloLink" id="tituloLink"
                            placeholder="Insira um título" v-model="link.nomeUrl">
                        <h4>URL original</h4>
                        <p>Você poderá inserir uma ou várias URL's, faça como desejar. Lembre-se de inserir a quantidade
                            de clientes junto à URL.</p>

                        <div>
                            <div v-for="(link, index) in linkEntrada" :key="index" class="d-flex align-items-center">
                                
                            </div>

                        </div>


                        <div v-for="(link, index)  in linkSaida" :key="index" class="d-flex ">
                            <h5>{{index + 1}}</h5>
                            <input style="width:87%; margin-bottom: 10px;" type="text" name="linkSaida" id="linkSaida" placeholder="Insira um link de saída" v-model="link.link">

                            <input style="width: 50px; margin-bottom: 10px; margin-left: 5px;" 
                          type="number" name="maxClick" id="maxClick" v-model="link.maxClick" placeholder="MaxClick">
                        </div>

                        <div><button type="button" class="btn btn-outline-primary" @click="criarSaida()"><span>+</span> Adicionar
                                mais uma URL</button></div>

                        <h4>URL Default</h4>

                        <p>Essa URL será associada ao redirecionamento apenas quando todas as outras chegarem ao limite
                            de cliques. Ela será a uma url fixa sem limitação.</p>

                        <input v-for="link in linkEntrada" :key="link.id" v-model="link.urlDefault" type="text" name="urlDefault" id="urlDefault" placeholder="Insira a URL Default">

                        <div @click="criarUrl" style="position:absolute; bottom: 10px; right: 20px;"><button class="btn btn-blue">Salvar
                                Link</button></div>
                    </div>
                </div>
            </div>



        </modal>
    </div>
</template>

<style>
.body {
    height: 100vh;

}

.center {
    display: grid;
    place-items: center;
    height: 100vh;
    width: 90%;
    margin: 0 auto;
    text-align: center;
    font-size: 2em;
}






.offcanvas.show,
.offcanvas.showing {
    width: 50%;
}

h4 {
    margin: 10px 0px;
}

.primary {
    color: #2133D2;
}

h4,
.link {
    color: #2133D2;
    height: 10px;
}

p {
    color: #81858E;
    margin-top: 20px;
}

.btn-blue {
    background: #2133D2;
    color: white;
}

.btn-light-blue {
    width: 74.62877655029297px;
    border-radius: 3px;
    height: 30px;
    border: none;
    margin-top: 10px;
    color: #2133D2;
    background-color: #2133D21A;
    margin-right: 10px;
}

input {
    border: none;
    outline: none;
    border-bottom: 1px solid #81858e91;
    width: 100%;
}

input:focus {
    border-bottom: 1px solid #2133D2;
}
</style>

<script>
import MenuLateral from '@/components/MenuLateral'
import Modal from '@/components/Modal'
import LinkEntrada from '@/components/LinkEntrada'
import axios from 'axios'
export default {
    name: 'IndexTemplate',
    components: {
        MenuLateral,
        Modal,
        LinkEntrada
    },
    data() {
        return {
            linkEntrada:[{nomeUrl: '', urlDefault: ''}],
            linkSaida:[],
            mostrar: [],
        }  
    },
    mounted(){
        var that = this;
        axios.get('http://127.0.0.1:8000/api/receber')
                .then(response => {
                    this.mostrar= response.data

                    console.log(that[0])
                })

                .catch(error => {
                    console.log(error)
                })
            ;
    },
    methods:{
        criarSaida(){
            var dados = this.linkSaida;
            dados.push({link: '', maxClick:''})
            this.linkSaida = dados
        },
        criarUrl(){
            var sum = 0
            for(let click in this.linkSaida){
                if(this.linkSaida[click] === null){
                this.linkSaida[click] = 0
            }
            sum += parseInt(this.linkSaida[click].maxClick)
            }


            var urlBase = {
                nome_link:this.linkEntrada[0].nomeUrl,
                link_hash: this.linkEntrada[0].urlDefault,
                total_max_click: sum
            }

            axios.post('http://127.0.0.1:8000/api/env', urlBase)
                .then(response => {
                    console.log(response.data)
                })

                .catch(error => {
                    console.log(error)
                })
            ; 
            

            var urlSaida = {
                id_redirect:1,
                link: this.linkSaida,
                click: 1,
            }

            axios.post('https://webhook.site/1f5e9360-34c4-4b81-b756-b42ae552f174', urlSaida)
                .then(response => {
                    
                })

                .catch(error => {

                })
            ;

            this.linkEntrada.pop();
            this.linkEntrada.push({nomeUrl: '', urlDefault: ''});
        },
        redirect(dados){

        }
    }
}
</script>

