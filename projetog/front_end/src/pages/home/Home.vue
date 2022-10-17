<template>
    <index-template style="overflow: hidden;">
        <div slot="menu">
            <div>
                <router-link  @click="limpar()" to="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                        class="fa-solid fa-gift actived"></i></router-link>
            </div>

            <div>
                <router-link to="#"><i class="fa-solid fa-graduation-cap"></i></router-link>
            </div>

            <div>
                <router-link to="#"><i class="fa-solid fa-trophy"></i></router-link>
            </div>

            <div>
                <router-link to="#"><i class="fa-solid fa-user"></i></router-link>
            </div>

            <div>
                <router-link to="#"><i class="fa-solid fa-comments"></i></router-link>
            </div>

            <div>
                <div id="radius">
                </div>
            </div>
        </div>

        <div slot="cont">
            <h1>Projeto<span>G</span></h1>
        </div>



    </index-template>
</template>

<style scoped>
i {
    font-size: 1.4em;
    margin-top: 60px;
    color: rgb(61, 61, 61);
}

.actived {
    color: rgba(52, 52, 250, 0.973);
}

#radius {
    position: absolute;
    bottom: 30px;
    left: 50%;
    transform: translateX(-50%);
    width: 30px;
    height: 30px;
    background-color: rgba(255, 253, 253, 0.884);
    border-radius: 50%;
    border: 1px solid rgba(19, 19, 19, 0.705);

}

span {
    color: rgb(103, 255, 103);
    transform: translateY(10px);
}

</style>

<script>
import IndexTemplate from '@/templates/IndexTemplate'
export default {
    name: 'Home',
    components: {
        IndexTemplate
    },
    data() {
        return {

        }
    }
}
</script>


