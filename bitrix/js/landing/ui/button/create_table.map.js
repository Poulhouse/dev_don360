{"version":3,"sources":["create_table.js"],"names":["BX","namespace","Landing","UI","Button","CreateTable","id","options","EditorAction","apply","this","arguments","editPanel","prototype","constructor","__proto__","onClick","event","preventDefault","stopPropagation","defaultColorTextRgb","defaultColorTextHex","divTableContainer","document","createElement","classList","add","tableElement","setAttribute","trElementFirst","trElement","thElementDnd","divAddRowHere","divLineX","divRowDnd","appendChild","tdElement","width","getCellWidth","style","color","thDndElement","divColumnDnd","divColumnResize","divAddColHere","divLineY","thElementFirst","divTechIconElement","cloneNode","i","node","execCommand","innerHTML","newTable","getElementById","thTech","querySelector","firstChild","remove","setThDnd","querySelectorAll","forEach","thDnd","setTrDnd","trDnd","removeAttribute","Block","Node","Text","currentNode","onChange","STANDART_CELL_WIDTH","BRAKEPOINT_DINAMIC_CELL","TECHNIC_WIDTH","DEFAULT_AMOUNT_CELL","cellWidth","textNodeWidth","getBoundingClientRect","Math","floor"],"mappings":"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","file":"create_table.map.js"}