<template>
    <div>
        <multiselect
            v-model="value"
            :options="options"
            :multiple="true"
            :close-on-select="false"
            :clear-on-select="false"
            :preserve-search="true"
            placeholder=""
            label="label"
            track-by="label"
            :preselect-first="true"
            :taggable="true"
            :searchable="false"
        >
        </multiselect>
        <input type="hidden" name="areas" :value="selectedValues" />
    </div>
</template>

<script>
import Multiselect from "vue-multiselect";

export default {
    components: {
        Multiselect,
    },
    computed: {
        selectedValues() {
            let selectedValues = [];
            this.value.forEach((item) => {
                selectedValues.push(item.id);
            });
            return JSON.stringify(selectedValues);
        },
    },

    props: {
        options: {
            type: Array,
            default() {
                return [];
            },
        },
    },

    data() {
        return {
            value: [],
        };
    },
};
</script>

<style>

</style>
