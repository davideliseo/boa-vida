<template>
  <div id="app" class="form-group row">
    <label for="roles" class="col-md-5 col-form-label text-md-left">
      <div class="d-flex align-items-center">
        <i class="material-icons-round pr-3 md-auto"> supervisor_account </i>
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
    <div class="collapse pt-2" id="rolesSection">
      <div class="card card-body pb-0">
        <table class="table table-hover">
          <thead>
            <tr>
              <th></th>
              <th>Área</th>
              <th>Permisos</th>
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
                    <i class="material-icons-round md-18"> remove_circle </i>
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
                <input
                  v-model="role.permission"
                  :name="`roles[${index}][permission]`"
                  type="text"
                  class="form-control"
                  placeholder="Permisos"
                />
              </td>
            </tr>
            <tr class="align-items-center justify-content-center">
              <td>
                <button
                  @click="addRole"
                  type="button"
                  class="btn-v2 btn-deg-dark-blue px-2"
                >
                  <div class="d-flex align-items-center">
                    <i class="material-icons-round md-18"> add_circle </i>
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
</template>

<script>
export default {
  data() {
    return {
      roles: [
        {
          area: "Productos",
          permission: 1000,
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
    addRole() {
      this.roles.push({
        area: "",
        permission: "",
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
