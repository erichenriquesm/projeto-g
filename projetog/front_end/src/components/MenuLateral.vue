<template>
        <div class="offcanvas-start show" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
            <slot></slot>
        </div>
</template>

<style scoped>
    #offcanvas{
        position: relative;
        padding: 10px;
        border: 1px solid rgba(0, 0, 0, 0.144);
        background-color: rgba(255, 255, 255, 0.856);
        text-align: center;
        min-width: 60px;
    }


</style>

<script>

export default {
    name: 'MenuLateral',
    data() {
        return {

        }
    }
}
</script>

