<template>
    <div id="app" class="form-group row">
        <label for="roles" class="col-md-5 col-form-label text-md-left">
            <div class="d-flex align-items-center">
                <i class="material-icons-round pr-3 md-auto">
                    supervisor_account
                </i>
                Roles
            </div>
        </label>
        <div class="col-md-6">
            <button
                class="btn-v2 btn-deg-dark-gray"
                @click="toggleCollapse"
                type="button"
                data-toggle="collapse"
                data-target="#rolesSection"
                aria-expanded="false"
                aria-controls="rolesSection"
            >
                <div class="d-flex align-items-center">
                    <i class="material-icons-round pr-2 md-18">
                        {{ this.button.icon }}
                    </i>
                    {{ this.button.label }}
                </div>
            </button>
        </div>
        <div class="collapse pt-2 pr-4" id="rolesSection">
            <div class="card pb-0">
                <div class="card-header font-weight-bold">
                    Seleccione las áreas y sus respectivos permisos
                </div>
                <div class="card-body pb-0">
                    <div
                        class="alert alert-warning alert-dismissible fade show pb-0"
                        role="alert"
                        style="line-height: 1.42857"
                    >
                        <p>
                            Recordar que si a un usuario se le asigna un área
                            sin permisos especiales, este usuario
                            <strong
                                >solo podrá ver la lista de los elementos de esa
                                área</strong
                            >. No confundir con el permiso especial
                            <strong>Ver</strong>, que solo permite al usuario
                            ver una vista detallada de un elemento en
                            particular.
                        </p>

                        <button
                            type="button"
                            class="close"
                            data-dismiss="alert"
                            aria-label="Close"
                        >
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Área</th>
                                <th>Permisos especiales</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                class="align-items-center justify-content-center"
                                v-for="(role, index) in roles"
                                :key="index"
                            >
                                <td class="pt-3">
                                    <button
                                        @click="removeRole(index)"
                                        class="btn-v2 btn-deg-red shadow-sm px-2"
                                        type="button"
                                    >
                                        <div class="d-flex align-items-center">
                                            <i
                                                class="material-icons-round md-18"
                                            >
                                                remove_circle
                                            </i>
                                        </div>
                                    </button>
                                </td>
                                <td>
                                    <input
                                        v-model="role.area"
                                        :name="`roles[${index}][area]`"
                                        type="text"
                                        class="form-control"
                                        placeholder="Área"
                                    />
                                </td>
                                <td>
                                    <multiselect
                                        v-model="role.permissions"
                                        :name="`roles[${index}][permissions]`"
                                        :options="options"
                                        :multiple="true"
                                        :close-on-select="false"
                                        :clear-on-select="false"
                                        :preserve-search="true"
                                        placeholder="Seleccione los permisos"
                                        label="label"
                                        track-by="label"
                                        :preselect-first="true"
                                        :taggable="true"
                                        @input="updatePermissions(index)"
                                    >
                                    </multiselect>
                                    <!-- <input
                                        v-model="role.permissions"
                                        :name="`roles[${index}][permissions]`"
                                        type="text"
                                        class="form-control"
                                        placeholder="Permisos"
                                    /> -->
                                </td>
                            </tr>
                            <tr
                                class="align-items-center justify-content-center"
                            >
                                <td>
                                    <button
                                        @click="addRole"
                                        type="button"
                                        class="btn-v2 btn-deg-dark-blue px-2"
                                    >
                                        <div class="d-flex align-items-center">
                                            <i
                                                class="material-icons-round md-18"
                                            >
                                                add_circle
                                            </i>
                                        </div>
                                    </button>
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Multiselect from "vue-multiselect";
export default {
    components: {
        Multiselect,
    },
    computed: {
        selectedPermissions() {
            let selectedPermissions = [];
            this.value.forEach((item) => {
                selectedPermissions.push(item.value);
            });
            return selectedPermissions;
        },
    },
    data() {
        return {
            value: [
                { label: "Ver", value: "view" },
                { label: "Editar", value: "edit" },
                { label: "Crear", value: "create" },
                { label: "Eliminar", value: "destroy" },
            ],
            options: [
                { label: "Ver", value: "view" },
                { label: "Editar", value: "edit" },
                { label: "Crear", value: "create" },
                { label: "Eliminar", value: "destroy" },
            ],
            roles: [
                {
                    area: "Productos",
                    permissions: [],
                },
            ],
            button: {
                icon: "visibility",
                label: "Mostrar",
            },
            isCollapsed: true,
        };
    },

    methods: {
        updatePermissions(index) {
            alert('inside');

            this.roles[index].permissions.push(value);
        },
        addRole() {
            this.roles.push({
                area: "",
                permissions: "",
            });
        },

        removeRole(index) {
            this.roles.splice(index, 1);
        },

        toggleCollapse() {
            this.isCollapsed = !this.isCollapsed;
            this.button = {
                icon: this.isCollapsed ? "visibility" : "visibility_off",
                label: this.isCollapsed ? "Mostrar" : "Ocultar",
            };
        },
    },
};
</script>
