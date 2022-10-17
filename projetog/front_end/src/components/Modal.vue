<template>
    <div id="body">
        <div style="display: flex;">
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content p-4">
                            <div style="display:flex; justify-content: end;" class="modal-header">
                                <slot name="modal_header"></slot>
                            </div>
                            <div class="modal-body">
                                <slot name="modal_body"></slot>  
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</template>

<style>
    .modal-header, .modal-body, .modal-footer{
        border: none;
    }
</style>

<script>
export default {
    name: 'Modal',
    components: {
    },
    data() {
        return {

        }
    }
}
</script>

