<?php
session_start();
include('recursos/clases/ReservaCs.php');
include('recursos/template/header.php');
include('recursos/template/navUser.php');
if (isset($_GET['id'])) {
  $codigo = $_GET['id'];
  $fechaReserva = $_GET['fecha'];
  $params = array(
      'codigo' => $codigo,
      'fechaReserva' => $fechaReserva
  );

} else {
  $idReserva = "";
  $fechaReserva = "";
}
?> 
<!-- PONER MENSAJE DE DIA ERRONEO -->
<div class="container mx-auto mt-10">
    <div class="wrapper bg-white rounded shadow w-full p-4 "  >
      <div class="header flex justify-between border-b p-2">
        <span class="text-lg font-bold">
          2023 Junio
        </span>
      </div>
      <table class="w-full shadow bg-light text-dark" >
        <thead>
          <tr>
            <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
              <span class="xl:block lg:block md:block sm:block hidden">Lunes</span>
              <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Lun</span>
            </th>
            <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
              <span class="xl:block lg:block md:block sm:block hidden">Martes</span>
              <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Mar</span>
            </th>
            <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
              <span class="xl:block lg:block md:block sm:block hidden">Miercoles</span>
              <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Mie</span>
            </th>
            <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
              <span class="xl:block lg:block md:block sm:block hidden">Jueves</span>
              <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Jue</span>
            </th>
            <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
              <span class="xl:block lg:block md:block sm:block hidden">Viernes</span>
              <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Vie</span>
            </th>
            <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
              <span class="xl:block lg:block md:block sm:block hidden">Sabado</span>
              <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Sab</span>
            </th>
            <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
              <span class="xl:block lg:block md:block sm:block hidden">Domingo</span>
              <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Dom</span>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr class="text-center h-20">
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300 ">
              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                <div class="top h-5 w-full">
                  <span class="text-gray-500"></span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer">
                  <div class="event text-dark rounded p-1 text-sm mb-1">
                    <span class="event-name" placeholder=""></span>
                    <span class="time"></span>
                  </div>
                </div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                <div class="top h-5 w-full">
                  <span class="text-gray-500"></span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                <div class="top h-5 w-full">
                  <span class="text-gray-500"></span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                <div class="top h-5 w-full">
                  <span class="text-gray-500">1</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-hidden transition cursor-pointer duration-500 ease hover:bg-gray-300">
              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                <div class="top h-5 w-full">
                  <span class="text-gray-500">2</span>
                </div>
                <div class="bottom text-dark border border-success flex-grow h-30 py-1 w-full cursor-pointer">
                  <div class="event rounded p-1 text-sm mb-1">
                  <?php
                      // var_dump($fechaReserva);exit;
                      $hora = date_format(date_create($fechaReserva), 'h:i:s');
                      $dia = date_format(date_create($fechaReserva), 'd');
                      if($dia == 2){
                        echo $hora; 
                      }else{
                      // echo $fechaReserva; 
                      }
                      ?> 
                  </div>
                </div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-hidden transition cursor-pointer duration-500 ease hover:bg-gray-300">
              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                <div class="top h-5 w-full">
                  <span class="text-gray-500">3</span>
                </div>
                <div class="bottom text-dark border border-success flex-grow h-30 py-1 w-full cursor-pointer">
                  <div class="event rounded p-1 text-sm mb-1">
                  <?php
                      // var_dump($fechaReserva);exit;
                      $hora = date_format(date_create($fechaReserva), 'h:i:s');
                      $dia = date_format(date_create($fechaReserva), 'd');
                      if($dia == 3){
                        echo $hora; 
                      }else{
                      // echo $fechaReserva; 
                      }
                      ?> 
                  </div>
                </div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                <div class="top h-5 w-full">
                  <span class="text-gray-500 text-sm">4</span>
                </div>
                <div class="bottom text-dark border border-success flex-grow h-30 py-1 w-full cursor-pointer">
                  <div class="event rounded p-1 text-sm mb-1">
                  <?php
                      // var_dump($fechaReserva);exit;
                      $hora = date_format(date_create($fechaReserva), 'h:i:s');
                      $dia = date_format(date_create($fechaReserva), 'd');
                      if($dia == 4){
                        echo $hora; 
                      }else{
                      // echo $fechaReserva; 
                      }
                      ?> 
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr class="text-center h-20">
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                <div class="top h-5 w-full">
                  <span class="text-gray-500">5</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                <div class="top h-5 w-full">
                  <span class="text-gray-500">6</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                <div class="top h-5 w-full">
                  <span class="text-gray-500">7</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                <div class="top h-5 w-full">
                  <span class="text-gray-500">8</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-hidden transition cursor-pointer duration-500 ease hover:bg-gray-300">
              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                <div class="top h-5 w-full">
                  <span class="text-gray-500">9</span>
                </div>
                <div class="bottom text-dark border border-success flex-grow h-30 py-1 w-full cursor-pointer">
                  <div class="event rounded p-1 text-sm mb-1">
                  <?php
                      // var_dump($fechaReserva);exit;
                      $hora = date_format(date_create($fechaReserva), 'h:i:s');
                      $dia = date_format(date_create($fechaReserva), 'd');
                      if($dia == 9){
                        echo $hora; 
                      }else{
                      // echo $fechaReserva; 
                      }
                      ?> 
                  </div>
                </div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-hidden transition cursor-pointer duration-500 ease hover:bg-gray-300">
              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                <div class="top h-5 w-full">
                  <span class="text-gray-500">10</span>
                </div>
                <div class="bottom text-dark border border-success flex-grow h-30 py-1 w-full cursor-pointer">
                  <div class="event rounded p-1 text-sm mb-1">
                  <?php
                      // var_dump($fechaReserva);exit;
                      $hora = date_format(date_create($fechaReserva), 'h:i:s');
                      $dia = date_format(date_create($fechaReserva), 'd');
                      if($dia == 10){
                        echo $hora; 
                      }else{
                      // echo $fechaReserva; 
                      }
                      ?> 
                  </div>
                </div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-hidden transition cursor-pointer duration-500 ease hover:bg-gray-300">
              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                <div class="top h-5 w-full">
                  <span class="text-gray-500">11</span>
                </div>
                <div class="bottom text-dark border border-success flex-grow h-30 py-1 w-full cursor-pointer">
                  <div class="event rounded p-1 text-sm mb-1">
                  <?php
                      // var_dump($fechaReserva);exit;
                      $hora = date_format(date_create($fechaReserva), 'h:i:s');
                      $dia = date_format(date_create($fechaReserva), 'd');
                      if($dia == 11){
                        echo $hora; 
                      }else{
                      // echo $fechaReserva; 
                      }
                      ?> 
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr class="text-center h-20">
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                <div class="top h-5 w-full">
                  <span class="text-gray-500">12</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                <div class="top h-5 w-full">
                  <span class="text-gray-500">13</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                <div class="top h-5 w-full">
                  <span class="text-gray-500">14</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                <div class="top h-5 w-full">
                  <span class="text-gray-500">15</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-hidden transition cursor-pointer duration-500 ease hover:bg-gray-300">
              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                <div class="top h-5 w-full">
                  <span class="text-gray-500">16</span>
                </div>
                <div class="bottom text-dark border border-success flex-grow h-30 py-1 w-full cursor-pointer">
                  <div class="event rounded p-1 text-sm mb-1">
                  <?php
                      // var_dump($fechaReserva);exit;
                      $hora = date_format(date_create($fechaReserva), 'h:i:s');
                      $dia = date_format(date_create($fechaReserva), 'd');
                      if($dia == 16){
                        echo $hora; 
                      }else{
                      // echo $fechaReserva; 
                      }
                      ?> 
                  </div>
                </div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-hidden transition cursor-pointer duration-500 ease hover:bg-gray-300">
              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                <div class="top h-5 w-full">
                  <span class="text-gray-500">17</span>
                </div>
                <div class="bottom text-dark border border-success flex-grow h-30 py-1 w-full cursor-pointer">
                  <div class="event rounded p-1 text-sm mb-1">
                  <?php
                      // var_dump($fechaReserva);exit;
                      $hora = date_format(date_create($fechaReserva), 'h:i:s');
                      $dia = date_format(date_create($fechaReserva), 'd');
                      if($dia == 17){
                        echo $hora; 
                      }else{
                      // echo $fechaReserva; 
                      }
                      ?> 
                  </div>
                </div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-hidden transition cursor-pointer duration-500 ease hover:bg-gray-300">
              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                <div class="top h-5 w-full">
                  <span class="text-gray-500">18</span>
                </div>
                <div class="bottom text-dark border border-success flex-grow h-30 py-1 w-full cursor-pointer">
                  <div class="event rounded p-1 text-sm mb-1">
                  <?php
                      // var_dump($fechaReserva);exit;
                      $hora = date_format(date_create($fechaReserva), 'h:i:s');
                      $dia = date_format(date_create($fechaReserva), 'd');
                      if($dia == 18){
                        echo $hora; 
                      }else{
                      // echo $fechaReserva; 
                      }
                      ?> 
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr class="text-center h-20">
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                <div class="top h-5 w-full">
                  <span class="text-gray-500">19</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                <div class="top h-5 w-full">
                  <span class="text-gray-500">20</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                <div class="top h-5 w-full">
                  <span class="text-gray-500">21</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                <div class="top h-5 w-full">
                  <span class="text-gray-500">22</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-hidden transition cursor-pointer duration-500 ease hover:bg-gray-300">
              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                <div class="top h-5 w-full">
                  <span class="text-gray-500">23</span>
                </div>
                <div class="bottom text-dark border border-success flex-grow h-30 py-1 w-full cursor-pointer">
                  <div class="event rounded p-1 text-sm mb-1">
                  <?php
                      // var_dump($fechaReserva);exit;
                      $hora = date_format(date_create($fechaReserva), 'h:i:s');
                      $dia = date_format(date_create($fechaReserva), 'd');
                      if($dia == 23){
                        $d =  "<div class='alert alert-primary p-2'><li>Reserva Ingresada</li>";
                        echo $d . " " . $hora ; 
                      }else{
                      // echo $fechaReserva; 
                      }
                      ?> 
                  </div>
                </div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-hidden transition cursor-pointer duration-500 ease hover:bg-gray-300">
              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                <div class="top h-5 w-full">
                  <span class="text-gray-500">24</span>
                </div>
                <div class="bottom text-dark border border-success flex-grow h-30 py-1 w-full cursor-pointer">
                  <div class="event rounded p-1 text-sm mb-1">
                  <?php
                      // var_dump($fechaReserva);exit;
                      $hora = date_format(date_create($fechaReserva), 'h:i:s');
                      $dia = date_format(date_create($fechaReserva), 'd');
                      if($dia == 24){
                        echo $hora; 
                      }else{
                      // echo $fechaReserva; 
                      }
                      ?> 
                  </div>
                </div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-hidden transition cursor-pointer duration-500 ease hover:bg-gray-300">
              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                <div class="top h-5 w-full">
                  <span class="text-gray-500">25</span>
                </div>
                <div class="bottom text-dark border border-success flex-grow h-30 py-1 w-full cursor-pointer">
                  <div class="event rounded p-1 text-sm mb-1">
                  <?php
                      // var_dump($fechaReserva);exit;
                      $hora = date_format(date_create($fechaReserva), 'h:i:s');
                      $dia = date_format(date_create($fechaReserva), 'd');
                      if($dia == 25){
                        echo $hora; 
                      }else{
                      // echo $fechaReserva; 
                      }
                      ?> 
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr class="text-center h-20">
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                <div class="top h-5 w-full">
                  <span class="text-gray-500">26</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                <div class="top h-5 w-full">
                  <span class="text-gray-500">27</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border bg-gray-100 p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                <div class="top h-5 w-full">
                  <span class="text-gray-500">28</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border bg-gray-100 p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                <div class="top h-5 w-full">
                  <span class="text-gray-500">29</span>
                </div>
                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
              </div>
            </td>
            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-hidden transition cursor-pointer duration-500 ease hover:bg-gray-300">
              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                <div class="top h-5 w-full">
                  <span class="text-gray-500">30</span>
                </div>
                <div class="bottom text-dark border border-success flex-grow h-30 py-1 w-full cursor-pointer">
                  <div class="event rounded p-1 text-sm mb-1">
                  <?php
                      // var_dump($fechaReserva);exit;
                      $hora = date_format(date_create($fechaReserva), 'h:i:s');
                      $dia = date_format(date_create($fechaReserva), 'd');
                      if($dia == 30){
                        echo $hora; 
                      }else{
                      // echo $fechaReserva; 
                      }
                      ?> 
                  </div>
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
</div>
<?php
include('recursos/template/footer.php');
?>
