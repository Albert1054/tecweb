        let i= 0;
        let k =0;
       function formChildren(){

        let div = document.createElement('div');

        div.innerHTML = `
        <fieldset>
        <label for="task-1">Nome:</label><input type="text" id="task-1" class="name" name="name-${i++}" placeholder="Digite o nome" required/><input type="button" value="Adicionar" id="add" /></br>
        <label for="task-2">Idade:</label><input type="number" class="idade" id="task-2" name="idade-${k++}" required/><button id="del">Excluir</button>
        </fieldset>
        `;

        document.querySelector('.todo').append(div);

        div.querySelector('#add').addEventListener("click", formChildren);

        div.querySelector('#del').addEventListener("click", e=>{

            if(confirm("Deseja realmente excluir esta caixa ?")){
                div.remove();
            }
   
        });

    }

    document.querySelector('#yes').addEventListener("change", formChildren);

    document.querySelector('#no').addEventListener('change', e=>{

        document.querySelector('.todo').innerHTML ='';

    });

    

   