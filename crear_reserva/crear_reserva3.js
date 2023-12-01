document.addEventListener("DOMContentLoaded", function () {
  // Selecciona los elementos de entrada de fecha y el elemento donde se mostrará el total
  const fechaInicioInput = document.getElementById("desde");
  const fechaFinInput = document.getElementById("hasta");
  const dias = document.getElementById("num_dias");
  const totalDisplay = document.getElementById("total");
  const precioTotalInput = document.getElementById("precioTotal");

  // Función que actualiza el total
  function actualizarTotal() {
    const fechaInicio = new Date(fechaInicioInput.value);
    const fechaFin = new Date(fechaFinInput.value);
    const tiempoUnDia = 24 * 60 * 60 * 1000; // milisegundos en un día

    // Verifica que ambas fechas sean válidas y que la fecha de inicio sea anterior a la fecha fin
    if (
      fechaInicio instanceof Date &&
      !isNaN(fechaInicio) &&
      fechaFin instanceof Date &&
      !isNaN(fechaFin) &&
      fechaInicio < fechaFin
    ) {
      // Calcula la diferencia en días
      const diferencia =
        Math.round(Math.abs((fechaFin - fechaInicio) / tiempoUnDia)) + 1; // +1 para incluir el día de inicio

      // Muestra la diferencia en días
      dias.textContent = diferencia;

      // Obtiene los valores de precio por día y seguro
      const precioPorDia = parseInt(
        document
          .getElementById("precio_por_dia")
          .textContent.replace(/\D/g, ""),
        10
      );
      const seguro = parseInt(
        document.getElementById("seguro").textContent.replace(/\D/g, ""),
        10
      );

      // Calcula el total
      const total = diferencia * precioPorDia + seguro;

      // Formatea y muestra el total
      totalDisplay.textContent = `${total.toLocaleString()}`;
      precioTotalInput.value = total;
      console.log(total);
    } else {
      // Si las fechas no son válidas o no se ha seleccionado alguna, puedes dejar el total como está o establecerlo a 0
      dias.textContent = "---";
      totalDisplay.textContent = "---"; // o '$0' si prefieres mostrar cero
    }
  }

  // Añade el event listener a ambos campos de fecha
  fechaInicioInput.addEventListener("change", actualizarTotal);
  fechaFinInput.addEventListener("change", actualizarTotal);
});
