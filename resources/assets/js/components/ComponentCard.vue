<template>
<div class="ComponentContainer uk-box-shadow-large">
    <slot></slot>
</div>
</template>

<script>
export default {

    methods: {
        increaseSize() {
            let newWidth = $(".ComponentContainer").width() * 1.1;
            console.log(newWidth);
            $(".ComponentContainer").width(newWidth);
        }

    }

}
</script>

<style>

.ComponentContainer {
    padding-top: 40px;
    padding: 20px;
    background-color: whitesmoke;
}


</style>
