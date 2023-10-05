import { Component } from '@angular/core';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage {
  funcionarios: any
  
  listarFuncionarios(){
    fetch('http://localhost/empresa/funcionarios/listar_funcionarios').then((response)=>
    response.json())
    .then((data)=>{
      console.log(data.funcionario)
      this.funcionarios = data.funcionario
    })
  }
}
