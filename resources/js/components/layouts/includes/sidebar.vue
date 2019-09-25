<template>
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="list-group list-group-flush">
            <slot name="dashBoard"></slot>
            <slot name="manageUser"></slot>
            <slot name="manageProject"></slot>
            <slot name="manageTask"></slot>
            <a href="#" class="list-group-item list-group-item-action bg-light">OverView</a>
        </div>
    </div>

</template>

<script>
    export default {
        name: "sidebar.vue"
    }
</script>

<style scoped>

</style>