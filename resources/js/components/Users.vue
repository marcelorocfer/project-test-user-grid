<template>
    <div>
        <ejs-grid ref="dataGrid"
                  :dataSource="users"
                  :allowPaging="true"
                  :pageSettings="pageSettings"
                  :filterSettings='filterOptions'
                  :allowSorting="true"
                  :allowGrouping="true"
                  :allowFiltering="true">
            <e-columns>
                <e-column field="name" headerText="Nome"></e-column>
                <e-column field="email" headerText="E-mail"></e-column>
                <e-column field="active" headerText="Status"></e-column>
                <e-column field="access" headerText="Quantidade de Logins"></e-column>
            </e-columns>
        </ejs-grid>
    </div>
</template>

<script>
import Vue from 'vue';
import { GridPlugin, Page, Sort, Filter } from '@syncfusion/ej2-vue-grids';
import { DropDownList } from "@syncfusion/ej2-dropdowns";
import { DataManager } from "@syncfusion/ej2-data";
import { createElement, setCulture, L10n } from "@syncfusion/ej2-base";
setCulture('pt-BR');

L10n.load({
    'pt-BR': {
        'grid': {
            'EmptyRecord': 'Nenhum registro encontrado',
            'Item': 'Item',
            'Items': 'Itens',
            'StartsWith': 'Inicia com',
            'EndsWith': 'Finaliza com',
            'Contains': 'Contém',
            'Equal': 'Igual',
            'NotEqual': 'Diferente',
            'LessThan': 'Menor que',
            'LessThanOrEqual': 'Menor ou igual',
            'GreaterThan': 'Maior que',
            'GreaterThanOrEqual': 'Maior ou igual',
            'FilterButton': 'Filtrar',
            'ClearButton': 'Limpar',
            'EnterValue': 'Insira o valor',
        },
        'pager':{
            'currentPageInfo': '{0} de {1} Páginas',
            'totalItemsInfo': '({0} Itens)',
            'firstPageTooltip': 'Para a primeira página',
            'lastPageTooltip': 'Para a última página',
            'nextPageTooltip': 'Para a última página',
            'previousPageTooltip': 'Voltar para a última página',
            'nextPagerTooltip': 'Para a próxima página',
            'previousPagerTooltip': 'Para a página anterior',
            'pagerDropDown': 'Itens por página'
        }
    }
});

Vue.use(GridPlugin);
export default {
    data() {
        let dropInstance = null;
        return {
            users: [],
            pageSettings: { pageSize: 20, pageSizes: ['10','20','30','100'] },
            filterOptions: {
                ignoreAccent: true,
                type: 'Menu'
            },
            filter: {
                ui: {
                    create: function (args) {
                        let db = new DataManager(data);
                        let flValInput = createElement('input', { className: 'flm-input' });
                        args.target.appendChild(flValInput);
                        dropInstance = new DropDownList({
                            dataSource: new DataManager(data),
                            fields: { text: 'name', value: 'name' },
                            placeholder: 'Select a value',
                            popupHeight: '200px'
                        });
                        dropInstance.appendTo(flValInput);
                    },
                    write: function (args) {
                        dropInstance.value = args.filteredValue;
                    },
                    read: function (args) {
                        args.fltrObj.filterByColumn(args.column.field, args.operator, dropInstance.value);
                    }
                }
            }
        }
    },
    provide: {
        grid: [Page, Sort, Filter]
    },
    methods: {
        list: function() {

            axios.get(BASE_URL+'api/user')
                .then(response => {
                    this.users = response.data.data;
                })
                .catch(e => {
                    this.errors.push(e)
                })
        }
    },
    mounted() {
        this.list()
    }
}
</script>

<style>
    @import url(https://cdn.syncfusion.com/ej2/bootstrap.css);
</style>