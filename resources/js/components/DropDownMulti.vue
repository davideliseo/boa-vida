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
            label="name"
            track-by="id"
            :preselect-first="true"
            :taggable="true"
            :searchable="true"
        >
        </multiselect>
        <input type="hidden" :name="this.input" :value="selectedValues" />
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
        input: {
            type: String,
            default() {
                return "";
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
