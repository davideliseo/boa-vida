<template>
    <div>
        <multiselect
            v-model="value"
            :options="options"
            :preserve-search="true"
            placeholder=""
            label="name"
            track-by="id"
            :preselect-first="false"
            :searchable="true"
        >
        </multiselect>
        <input type="hidden" :id="this.input" :name="this.input" :value="selectedValue" />
    </div>
</template>

<script>
import Multiselect from "vue-multiselect";

export default {
    components: {
        Multiselect,
    },
    computed: {
        selectedValue() {
            return this.value.id;
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
            }
        }
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
