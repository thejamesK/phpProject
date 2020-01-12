function pokazDane()
{
    dane="Następujące dane zostaną wysłane:\n";
    dane+="Imię: "+document.getElementById('name').value+"\n";
    dane+="Email: "+document.getElementById('email').value;
    dane+="\nWybrany temat: ";
    for (i=0; i<document.forms[0].temat.length; i++)
    {
        if (document.forms[0].temat[i].checked) dane+=document.forms[0].temat[i].value;
    }
    dane+="\nWiadomość: "+document.getElementById('message').value+"\n";
    dane+="Regulamin & Nie jestem robotem: ";
    for (i=0; i<document.forms[0].regulamin.length; i++)
    {
        if (document.forms[0].regulamin[i].checked)
        {
            dane+=document.forms[0].regulamin[i].value;
            if (i !== document.forms[0].regulamin.length-1 )dane+=', ';
        }
    }
    if (window.confirm(dane)) return true;
    else return false;
}