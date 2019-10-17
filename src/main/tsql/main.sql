--
-- Copyright (C) 2019-2019 SonarSource SA
-- All rights reserved
-- TODO Move to LGPLv2?
--

create or replace procedure pr_check_site is
   dummy_not_used varchar2(20);
   
begin
      if pkg_get_object.fn_parameter_char_value('DB_LOC') <> 'VAR' then
         pr_raise_it(p_mess => 'Not on VAR env.');
      end if;
      if pkg_get_object.fn_parameter_char_value('LT_SONAR') <> 'ENA' then
         pr_raise_it(p_mess => 'Sonar intf disabled');
      end if;
       
end;
