<!DOCTYPE html>
<html>
<head>
	<title>Inputs plugin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="library/style.css">
</head>
<body data-type="progressbar">
	<ul>
		<li><a href="index.php">Return</a></li>
	</ul>
	<span id="form-msg"></span>
	<h1>Tables</h1>
		
	<h2>Order and filter</h2>
	<h3>Normal</h3>
	Mostrar:
	<select id="my-table-show"></select>
	<span style="float:right; display:block;">
		Buscar: <input type="search" id="my-table-search">
	</span>
	<table id="my-table" data-type="tableof">
	<thead>
	<tr>
	<th>Rank</th>
	<th>Country</th>
	<th>US $</th>
	<th>Year</th>
	</tr>
	</thead>
	<tr>
	<td>1</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Luxembourg.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Luxembourg" title="Luxembourg">Luxembourg</a></td>
	<td>113,533</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>2</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Qatar.svg.png" width="22" height="9" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Qatar" title="Qatar">Qatar</a></td>
	<td>98,329</td>
	<td>2014</td>
	</tr>
	<tr>
	<td>3</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Norway.svg.png" width="22" height="16" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Norway" title="Norway">Norway</a></td>
	<td>97,255</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>4</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/20px-Flag_of_Switzerland.svg.png" width="20" height="20" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Switzerland" title="Switzerland">Switzerland</a></td>
	<td>81,161</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>5</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_the_United_Arab_Emirates.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/United_Arab_Emirates" title="United Arab Emirates">United Arab Emirates</a></td>
	<td>67,008</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>6</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Australia.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Australia" title="Australia">Australia</a></td>
	<td>65,477</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>7</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Denmark.svg.png" width="22" height="17" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Denmark" title="Denmark">Denmark</a></td>
	<td>59,928</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>8</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Sweden.svg.png" width="22" height="14" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Sweden" title="Sweden">Sweden</a></td>
	<td>56,956</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>9</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Canada.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Canada" title="Canada">Canada</a></td>
	<td>50,436</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>10</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_the_Netherlands.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Netherlands" title="Netherlands">Netherlands</a></td>
	<td>50,355</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>11</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Austria.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Austria" title="Austria">Austria</a></td>
	<td>49,809</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>12</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Finland.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Finland" title="Finland">Finland</a></td>
	<td>49,350</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>13</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Singapore.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Singapore" title="Singapore">Singapore</a></td>
	<td>49,271</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>14</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_the_United_States.svg.png" width="22" height="12" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/United_States" title="United States">United States</a></td>
	<td>48,387</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>15</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Kuwait.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Kuwait" title="Kuwait">Kuwait</a></td>
	<td>47,982</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>16</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Ireland.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Republic_of_Ireland" title="Republic of Ireland">Ireland</a></td>
	<td>47,513</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>17</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Belgium_%28civil%29.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Belgium" title="Belgium">Belgium</a></td>
	<td>46,878</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>18</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Japan.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Japan" title="Japan">Japan</a></td>
	<td>45,920</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>19</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_France.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/France" title="France">France</a></td>
	<td>44,008</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>20</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Germany.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Germany" title="Germany">Germany</a></td>
	<td>43,742</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>21</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Iceland.svg.png" width="22" height="16" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Iceland" title="Iceland">Iceland</a></td>
	<td>43,088</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>22</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_the_United_Kingdom.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/United_Kingdom" title="United Kingdom">United Kingdom</a></td>
	<td>38,592</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>23</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_New_Zealand.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/New_Zealand" title="New Zealand">New Zealand</a></td>
	<td>36,648</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>24</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Brunei.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Brunei" title="Brunei">Brunei</a></td>
	<td>36,584</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>25</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Italy.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Italy" title="Italy">Italy</a></td>
	<td>36,267</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>-</td>
	<td align="left"><i><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Europe.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/European_Union" title="European Union">European Union</a></i></td>
	<td>35,116</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>-</td>
	<td align="left"><i><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Hong_Kong.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Hong_Kong" title="Hong Kong">Hong Kong</a></i></td>
	<td>34,049</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>26</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Spain.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Spain" title="Spain">Spain</a></td>
	<td>32,360</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>27</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Israel.svg.png" width="22" height="16" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Israel" title="Israel">Israel</a></td>
	<td>31,986</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>28</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Cyprus.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Cyprus" title="Cyprus">Cyprus</a></td>
	<td>30,571</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>29</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Greece.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Greece" title="Greece">Greece</a></td>
	<td>27,073</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>30</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Slovenia.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Slovenia" title="Slovenia">Slovenia</a></td>
	<td>24,533</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>31</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Oman.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Oman" title="Oman">Oman</a></td>
	<td>23,315</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>32</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_the_Bahamas.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/The_Bahamas" title="The Bahamas">Bahamas, The</a></td>
	<td>23,175</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>33</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Bahrain.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Bahrain" title="Bahrain">Bahrain</a></td>
	<td>23,132</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>34</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_South_Korea.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/South_Korea" title="South Korea">Korea, South</a></td>
	<td>22,778</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>35</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Portugal.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Portugal" title="Portugal">Portugal</a></td>
	<td>22,413</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>36</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Malta.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Malta" title="Malta">Malta</a></td>
	<td>21,028</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>37</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Saudi_Arabia.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Saudi_Arabia" title="Saudi Arabia">Saudi Arabia</a></td>
	<td>20,504</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>38</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_the_Czech_Republic.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Czech_Republic" title="Czech Republic">Czech Republic</a></td>
	<td>20,444</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>39</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_the_Republic_of_China.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Taiwan" title="Taiwan">Taiwan</a></td>
	<td>20,101</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>40</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Slovakia.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Slovakia" title="Slovakia">Slovakia</a></td>
	<td>17,644</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>41</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Trinidad_and_Tobago.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Trinidad_and_Tobago" title="Trinidad and Tobago">Trinidad and Tobago</a></td>
	<td>17,158</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>42</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Estonia.svg.png" width="22" height="14" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Estonia" title="Estonia">Estonia</a></td>
	<td>16,583</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>43</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Barbados.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Barbados" title="Barbados">Barbados</a></td>
	<td>16,148</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>44</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Equatorial_Guinea.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Equatorial_Guinea" title="Equatorial Guinea">Equatorial Guinea</a><sup id="cite_ref-6" class="reference"><a href="#cite_note-6"><span>[</span>7<span>]</span></a></sup></td>
	<td>14,661</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>45</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Croatia.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Croatia" title="Croatia">Croatia</a></td>
	<td>14,457</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>46</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Chile.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Chile" title="Chile">Chile</a></td>
	<td>14,278</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>47</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Hungary.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Hungary" title="Hungary">Hungary</a></td>
	<td>14,050</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>48</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Uruguay.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Uruguay" title="Uruguay">Uruguay</a></td>
	<td>13,914</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>49</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Antigua_and_Barbuda.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Antigua_and_Barbuda" title="Antigua and Barbuda">Antigua and Barbuda</a></td>
	<td>13,552</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>50</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Poland.svg.png" width="22" height="14" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Poland" title="Poland">Poland</a></td>
	<td>13,540</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>51</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Lithuania.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Lithuania" title="Lithuania">Lithuania</a></td>
	<td>13,075</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>52</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Russia.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Russia" title="Russia">Russia</a></td>
	<td>12,993</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>53</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Brazil.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Brazil" title="Brazil">Brazil</a></td>
	<td>12,789</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>54</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Saint_Kitts_and_Nevis.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Saint_Kitts_and_Nevis" title="Saint Kitts and Nevis">Saint Kitts and Nevis</a></td>
	<td>12,728</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>55</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Latvia.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Latvia" title="Latvia">Latvia</a></td>
	<td>12,671</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>56</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Seychelles.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Seychelles" title="Seychelles">Seychelles</a></td>
	<td>11,170</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>57</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Argentina.svg.png" width="22" height="14" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Argentina" title="Argentina">Argentina</a></td>
	<td>10,945</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>58</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Kazakhstan.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Kazakhstan" title="Kazakhstan">Kazakhstan</a></td>
	<td>10,694</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>59</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Gabon.svg.png" width="22" height="17" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Gabon" title="Gabon">Gabon</a></td>
	<td>10,654</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>60</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Venezuela.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Venezuela" title="Venezuela">Venezuela</a></td>
	<td>10,610</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>61</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Turkey.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Turkey" title="Turkey">Turkey</a></td>
	<td>10,522</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>62</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Mexico.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Mexico" title="Mexico">Mexico</a></td>
	<td>10,153</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>-</td>
	<td align="left"><span class="flagicon" style="padding-left:24px;">&#160;</span><i><a target="_blank" href="http://en.wikipedia.org/wiki/World" title="World">World</a></i><sup id="cite_ref-7" class="reference"><a href="#cite_note-7"><span>[</span>8<span>]</span></a></sup></td>
	<td>10,144</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>63</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Lebanon.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Lebanon" title="Lebanon">Lebanon</a></td>
	<td>9,862</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>64</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Malaysia.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Malaysia" title="Malaysia">Malaysia</a></td>
	<td>9,700</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>65</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Botswana.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Botswana" title="Botswana">Botswana</a></td>
	<td>9,481</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>66</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Costa_Rica.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Costa_Rica" title="Costa Rica">Costa Rica</a></td>
	<td>8,877</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>67</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Romania.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Romania" title="Romania">Romania</a></td>
	<td>8,863</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>68</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Mauritius.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Mauritius" title="Mauritius">Mauritius</a></td>
	<td>8,777</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>69</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Panama.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Panama" title="Panama">Panama</a></td>
	<td>8,514</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>70</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_South_Africa.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/South_Africa" title="South Africa">South Africa</a></td>
	<td>8,066</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>71</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Grenada.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Grenada" title="Grenada">Grenada</a></td>
	<td>7,878</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>72</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Saint_Lucia.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Saint_Lucia" title="Saint Lucia">Saint Lucia</a></td>
	<td>7,435</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>73</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Montenegro.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Montenegro" title="Montenegro">Montenegro</a></td>
	<td>7,317</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>74</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Bulgaria.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Bulgaria" title="Bulgaria">Bulgaria</a></td>
	<td>7,202</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>75</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Colombia.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Colombia" title="Colombia">Colombia</a></td>
	<td>7,132</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>76</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Suriname.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Suriname" title="Suriname">Suriname</a></td>
	<td>7,096</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>77</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Dominica.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Dominica" title="Dominica">Dominica</a></td>
	<td>6,909</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>78</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Azerbaijan.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Azerbaijan" title="Azerbaijan">Azerbaijan</a></td>
	<td>6,832</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>79</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Iran.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Iran" title="Iran">Iran</a></td>
	<td>6,360</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>80</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Saint_Vincent_and_the_Grenadines.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Saint_Vincent_and_the_Grenadines" title="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</a></td>
	<td>6,342</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>81</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Serbia.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Serbia" title="Serbia">Serbia</a></td>
	<td>6,081</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>82</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Maldives.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Maldives" title="Maldives">Maldives</a></td>
	<td>5,973</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>83</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Belarus.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Belarus" title="Belarus">Belarus</a></td>
	<td>5,881</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>84</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Namibia.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Namibia" title="Namibia">Namibia</a></td>
	<td>5,828</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>85</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Peru.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Peru" title="Peru">Peru</a></td>
	<td>5,782</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>86</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Libya.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Libya" title="Libya">Libya</a></td>
	<td>5,691</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>87</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_the_Dominican_Republic.svg.png" width="22" height="14" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Dominican_Republic" title="Dominican Republic">Dominican Republic</a></td>
	<td>5,639</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>88</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_the_People%27s_Republic_of_China.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/China" title="China">China</a></td>
	<td>5,414</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>89</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Jamaica.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Jamaica" title="Jamaica">Jamaica</a></td>
	<td>5,402</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>90</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Thailand.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Thailand" title="Thailand">Thailand</a></td>
	<td>5,394</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>91</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Algeria.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Algeria" title="Algeria">Algeria</a></td>
	<td>5,304</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>92</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Angola.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Angola" title="Angola">Angola</a></td>
	<td>5,144</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>93</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Macedonia.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Republic_of_Macedonia" title="Republic of Macedonia">Macedonia, Republic of</a></td>
	<td>5,016</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>94</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Jordan.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Jordan" title="Jordan">Jordan</a></td>
	<td>4,675</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>95</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Turkmenistan.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Turkmenistan" title="Turkmenistan">Turkmenistan</a></td>
	<td>4,658</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>96</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Bosnia_and_Herzegovina.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Bosnia_and_Herzegovina" title="Bosnia and Herzegovina">Bosnia and Herzegovina</a></td>
	<td>4,618</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>97</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Ecuador.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Ecuador" title="Ecuador">Ecuador</a></td>
	<td>4,424</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>98</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Tunisia.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Tunisia" title="Tunisia">Tunisia</a></td>
	<td>4,351</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>99</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Belize.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Belize" title="Belize">Belize</a></td>
	<td>4,349</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>100</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Tonga.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Tonga" title="Tonga">Tonga</a></td>
	<td>4,221</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>101</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Albania.svg.png" width="22" height="16" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Albania" title="Albania">Albania</a></td>
	<td>3,992</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>102</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Fiji.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Fiji" title="Fiji">Fiji</a></td>
	<td>3,965</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>103</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_East_Timor.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/East_Timor" title="East Timor">East Timor</a></td>
	<td>3,949</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>104</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_El_Salvador.svg.png" width="22" height="12" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/El_Salvador" title="El Salvador">El Salvador</a></td>
	<td>3,855</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>105</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_the_Republic_of_the_Congo.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Republic_of_the_Congo" title="Republic of the Congo">Congo, Republic of the</a></td>
	<td>3,714</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>106</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Cape_Verde.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Cape_Verde" title="Cape Verde">Cape Verde</a></td>
	<td>3,661</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>107</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Ukraine.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Ukraine" title="Ukraine">Ukraine</a></td>
	<td>3,621</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>108</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Kosovo.svg.png" width="22" height="16" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Republic_of_Kosovo" title="Republic of Kosovo">Kosovo</a><sup id="cite_ref-uscensuspop_8-0" class="reference"><a href="#cite_note-uscensuspop-8"><span>[</span>9<span>]</span></a></sup></td>
	<td>3,534</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>109</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Iraq.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Iraq" title="Iraq">Iraq</a></td>
	<td>3,513</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>110</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Indonesia.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Indonesia" title="Indonesia">Indonesia</a></td>
	<td>3,509</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>111</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Samoa.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Samoa" title="Samoa">Samoa</a></td>
	<td>3,451</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>112</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Swaziland.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Swaziland" title="Swaziland">Swaziland</a></td>
	<td>3,358</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>113</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Tuvalu.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Tuvalu" title="Tuvalu">Tuvalu</a><sup id="cite_ref-uscensuspop_8-1" class="reference"><a href="#cite_note-uscensuspop-8"><span>[</span>9<span>]</span></a></sup></td>
	<td>3,319</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>114</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Paraguay.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Paraguay" title="Paraguay">Paraguay</a></td>
	<td>3,252</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>115</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Georgia.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Georgia_(country)" title="Georgia (country)">Georgia</a></td>
	<td>3,210</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>116</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Guyana.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Guyana" title="Guyana">Guyana</a></td>
	<td>3,202</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>117</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Guatemala.svg.png" width="22" height="14" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Guatemala" title="Guatemala">Guatemala</a></td>
	<td>3,182</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>118</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Morocco.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Morocco" title="Morocco">Morocco</a></td>
	<td>3,083</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>119</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Mongolia.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Mongolia" title="Mongolia">Mongolia</a></td>
	<td>3,042</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>120</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Vanuatu.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Vanuatu" title="Vanuatu">Vanuatu</a></td>
	<td>3,036</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>121</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Armenia.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Armenia" title="Armenia">Armenia</a></td>
	<td>3,033</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>122</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Egypt.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Egypt" title="Egypt">Egypt</a></td>
	<td>2,970</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>123</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Sri_Lanka.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Sri_Lanka" title="Sri Lanka">Sri Lanka</a></td>
	<td>2,877</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>124</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Syria.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Syria" title="Syria">Syria</a></td>
	<td>2,803</td>
	<td>2010</td>
	</tr>
	<tr>
	<td>125</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Bolivia.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Bolivia" title="Bolivia">Bolivia</a></td>
	<td>2,315</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>126</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_the_Philippines.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Philippines" title="Philippines">Philippines</a></td>
	<td>2,223</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>127</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Bhutan.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Bhutan" title="Bhutan">Bhutan</a></td>
	<td>2,121</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>128</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Honduras.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Honduras" title="Honduras">Honduras</a></td>
	<td>2,116</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>129</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Sudan.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Sudan" title="Sudan">Sudan</a></td>
	<td>1,982</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>130</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Moldova.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Moldova" title="Moldova">Moldova</a></td>
	<td>1,969</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>131</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Papua_New_Guinea.svg.png" width="22" height="17" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Papua_New_Guinea" title="Papua New Guinea">Papua New Guinea</a></td>
	<td>1,900</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>132</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Kiribati.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Kiribati" title="Kiribati">Kiribati</a></td>
	<td>1,593</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>133</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Uzbekistan.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Uzbekistan" title="Uzbekistan">Uzbekistan</a></td>
	<td>1,572</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>134</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_the_Solomon_Islands.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Solomon_Islands" title="Solomon Islands">Solomon Islands</a></td>
	<td>1,554</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>135</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Ghana.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Ghana" title="Ghana">Ghana</a></td>
	<td>1,529</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>136</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Nigeria.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Nigeria" title="Nigeria">Nigeria</a></td>
	<td>1,490</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>137</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Sao_Tome_and_Principe.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/S%C3%A3o_Tom%C3%A9_and_Pr%C3%ADncipe" title="São Tomé and Príncipe">São Tomé and Príncipe</a></td>
	<td>1,473</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>138</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Djibouti.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Djibouti" title="Djibouti">Djibouti</a></td>
	<td>1,467</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>139</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Zambia.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Zambia" title="Zambia">Zambia</a></td>
	<td>1,414</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>140</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_India.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/India" title="India">India</a></td>
	<td>1,389</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>141</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Vietnam.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Vietnam" title="Vietnam">Vietnam</a></td>
	<td>1,374</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>142</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Yemen.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Yemen" title="Yemen">Yemen</a></td>
	<td>1,340</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>143</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Mauritania.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Mauritania" title="Mauritania">Mauritania</a></td>
	<td>1,290</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>144</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Lesotho.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Lesotho" title="Lesotho">Lesotho</a></td>
	<td>1,264</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>145</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Nicaragua.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Nicaragua" title="Nicaragua">Nicaragua</a></td>
	<td>1,239</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>146</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Cameroon.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Cameroon" title="Cameroon">Cameroon</a></td>
	<td>1,230</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>147</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Laos.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Laos" title="Laos">Laos</a></td>
	<td>1,204</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>148</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Pakistan.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Pakistan" title="Pakistan">Pakistan</a></td>
	<td>1,201</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>149</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Senegal.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Senegal" title="Senegal">Senegal</a></td>
	<td>1,076</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>150</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Kyrgyzstan.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Kyrgyzstan" title="Kyrgyzstan">Kyrgyzstan</a></td>
	<td>1,070</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>151</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Cote_d%27Ivoire.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/C%C3%B4te_d%27Ivoire" title="Côte d'Ivoire">Côte d'Ivoire</a></td>
	<td>1,062</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>152</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_the_Comoros.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Comoros" title="Comoros">Comoros</a></td>
	<td>903</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>153</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Chad.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Chad" title="Chad">Chad</a></td>
	<td>892</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>154</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Cambodia.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Cambodia" title="Cambodia">Cambodia</a></td>
	<td>852</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>155</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Kenya.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Kenya" title="Kenya">Kenya</a></td>
	<td>851</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>156</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Myanmar.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Burma" title="Burma">Burma</a></td>
	<td>832</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>157</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Tajikistan.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Tajikistan" title="Tajikistan">Tajikistan</a></td>
	<td>831</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>158</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Zimbabwe.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Zimbabwe" title="Zimbabwe">Zimbabwe</a></td>
	<td>741</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>159</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Haiti.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Haiti" title="Haiti">Haiti</a></td>
	<td>738</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>160</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Benin.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Benin" title="Benin">Benin</a></td>
	<td>737</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>161</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Bangladesh.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Bangladesh" title="Bangladesh">Bangladesh</a></td>
	<td>678</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>162</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Mali.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Mali" title="Mali">Mali</a></td>
	<td>669</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>163</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Burkina_Faso.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Burkina_Faso" title="Burkina Faso">Burkina Faso</a></td>
	<td>664</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>164</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/16px-Flag_of_Nepal.svg.png" width="16" height="20" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Nepal" title="Nepal">Nepal</a></td>
	<td>653</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>165</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Rwanda.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Rwanda" title="Rwanda">Rwanda</a></td>
	<td>605</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>166</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Afghanistan.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Afghanistan" title="Afghanistan">Afghanistan</a></td>
	<td>585</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>167</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Mozambique.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Mozambique" title="Mozambique">Mozambique</a></td>
	<td>583</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>168</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Guinea-Bissau.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Guinea-Bissau" title="Guinea-Bissau">Guinea-Bissau</a></td>
	<td>576</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>169</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Tanzania.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Tanzania" title="Tanzania">Tanzania</a></td>
	<td>553</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>170</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_The_Gambia.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/The_Gambia" title="The Gambia">Gambia, The</a></td>
	<td>543</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>171</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Togo.svg.png" width="22" height="14" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Togo" title="Togo">Togo</a></td>
	<td>506</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>172</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Guinea.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Guinea" title="Guinea">Guinea</a></td>
	<td>492</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>173</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Uganda.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Uganda" title="Uganda">Uganda</a></td>
	<td>478</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>174</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Eritrea.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Eritrea" title="Eritrea">Eritrea</a></td>
	<td>475</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>175</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Madagascar.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Madagascar" title="Madagascar">Madagascar</a></td>
	<td>459</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>176</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_the_Central_African_Republic.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Central_African_Republic" title="Central African Republic">Central African Republic</a></td>
	<td>456</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>177</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Niger.svg.png" width="22" height="19" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Niger" title="Niger">Niger</a></td>
	<td>399</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>178</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Sierra_Leone.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Sierra_Leone" title="Sierra Leone">Sierra Leone</a></td>
	<td>366</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>179</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Ethiopia.svg.png" width="22" height="11" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Ethiopia" title="Ethiopia">Ethiopia</a></td>
	<td>360</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>180</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Malawi.svg.png" width="22" height="15" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Malawi" title="Malawi">Malawi</a></td>
	<td>351</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>181</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Liberia.svg.png" width="22" height="12" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Liberia" title="Liberia">Liberia</a></td>
	<td>298</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>182</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Burundi.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Burundi" title="Burundi">Burundi</a></td>
	<td>279</td>
	<td>2011</td>
	</tr>
	<tr>
	<td>183</td>
	<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_the_Democratic_Republic_of_the_Congo.svg.png" width="22" height="17" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Democratic_Republic_of_the_Congo" title="Democratic Republic of the Congo">Congo, Democratic Republic of the</a></td>
	<td>216</td>
	<td>2011</td>
	</tr>
	</table>
	Mostrando <span id="my-table-count-init"></span> a <span id="my-table-count-final"></span> de <span id="my-table-count-total"></span>
	Paginas:
	<ul id="my-table-navigation" data-navigation-prev="Anterior" data-navigation-next="Siguiente">
	</ul>

	<code data-type="codeeditor" data-lang="html"><?php echo htmlspecialchars('Mostrar:
<select id="my-table-show"></select>
<span style="float:right; display:block;">
	Buscar: <input type="search" id="my-table-search">
</span>
<table id="my-table">
	<thead>
		<tr>
			<th>Rank</th>
			<th>Country</th>
			<th>US $</th>
			<th>Year</th>
		</tr>
	</thead>
	<tr>
		<td>1</td>
		<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Luxembourg.svg.png" width="22" height="13" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Luxembourg" title="Luxembourg">Luxembourg</a></td>
		<td>113,533</td>
		<td>2011</td>
	</tr>
	<tr>
		<td>2</td>
		<td align="left"><span class="flagicon"><img alt="" src="https://s3.amazonaws.com/dynatable-docs-assets/images/flag_icons/22px-Flag_of_Qatar.svg.png" width="22" height="9" class="thumbborder" />&#160;</span><a target="_blank" href="http://en.wikipedia.org/wiki/Qatar" title="Qatar">Qatar</a></td>
		<td>98,329</td>
		<td>2011</td>
	</tr>
</table>
Mostrando <span id="my-table-count-init"></span> a <span id="my-table-count-final"></span> de <span id="my-table-count-total"></span>
Paginas:
<ul id="my-table-navigation" data-navigation-prev="Anterior" data-navigation-next="Siguiente">
</ul>'); ?></code>

	<h3>Via AJAX with JSON</h3>
	Mostrar:
	<select id="Canciones-show"></select>
	<span style="float:right; display:block;">
		Buscar: <input type="search" id="Canciones-search">
	</span>
	<table data-type="tableof" data-ajax-url="tablejson.php" id="Canciones">
	  <thead>
	    <th>Band</th>
	    <th>Song</th>
	  </thead>
	  <tbody>
	  </tbody>
	</table>
	Paginas:
	<ul id="Canciones-navigation" data-navigation-prev="Anterior" data-navigation-next="Siguiente">
	</ul>
	<code data-type="codeeditor" data-lang="html"><?php echo htmlspecialchars('<table data-type="tableof" data-ajax-url="tablejson.php" id="Canciones">
  <thead>
    <th>Band</th>
    <th></th>
  </thead>
  <tbody>
  </tbody>
</table>'); ?></code>
	<h3>Via AJAX with JSON, PHP and DB</h3>
	<p>This options send the queries, the sorts, elements per page and number of page and offset</p>
	Mostrar:
	<select id="Canciones2-show"></select>
	<span style="float:right; display:block;">
		Buscar: <input type="search" id="Canciones2-search">
	</span>
	<table data-type="tableof" data-ajax-url="tablejsondb.php" data-ajax-db="true" id="Canciones2">
	  <thead>
	    <th data-dynatable-column="band">Banda</th>
	    <th data-dynatable-column="song">Canción</th>
	  </thead>
	  <tbody>
	  </tbody>
	</table>
	Paginas:
	<ul id="Canciones2-navigation" data-navigation-prev="Anterior" data-navigation-next="Siguiente">
	</ul>
	<h4>HTML</h4>
	<code data-type="codeeditor" data-lang="html"><?php echo htmlspecialchars('<select id="Canciones2-show"></select>
	<span style="float:right; display:block;">
		Buscar: <input type="search" id="Canciones2-search">
	</span>
	<table data-type="tableof" data-ajax-url="tablejsondb.php" data-ajax-db="true" id="Canciones2">
	  <thead>
	    <th data-dynatable-column="band">Banda</th>
	    <th data-dynatable-column="song">Canción</th>
	  </thead>
	  <tbody>
	  </tbody>
	</table>
	Paginas:
	<ul id="Canciones2-navigation" data-navigation-prev="Anterior" data-navigation-next="Siguiente">
	</ul>'); ?></code>
	<h4>PHP</h4>
	<code data-type="codeeditor" data-lang="php"><?php echo htmlspecialchars('<?php 
  header(\'Content-Type: application/json\');
  if (!isset($_GET["page"])) {
    $_GET["page"] = "null";
  } 
  if (!isset($_GET["perPage"])) {
    $_GET["perPage"] = "null";
  }
  if (!isset($_GET["queries"]["search"])) {
    $_GET["queries"]["search"] = "null";
  }
  if (!isset($_GET["sorts"])) {
    $_GET["sorts"] = "null";
  } else {
    foreach ($_GET["sorts"] as $key => $value) {
      $_GET["sorts"] = $key."=".$value;
      break;
    }
  }
  if (!isset($_GET["offset"])) {
    $_GET["offset"] = "null";
  }
?>
{
  "records": [
    {
      "band": "<?php echo $_GET["page"]; ?>",
      "year": "",
      "song": "<?php echo $_GET["queries"]["search"]; ?>"
    },
    {
      "band": "<?php echo $_GET["sorts"]; ?>",
      "year": "", 
      "song": "<?php echo $_GET["offset"]; ?>"
    },
    {
      "band": "<?php echo $_GET["perPage"]; ?>",
      "year": 2015,
      "song": "El Scorcho"
    },
    {
      "band": "Chevelle",
      "year": 2015, 
      "song": "Family System"
    },
    {
      "band": "Weezer",
      "year": 2015,
      "song": "El Scorcho"
    },
    {
      "band": "Chevelle",
      "year": 2015, 
      "song": "Family System"
    },
    {
      "band": "Chevelle",
      "year": 2015, 
      "song": "Family System"
    },
    {
      "band": "Weezer",
      "year": 2015,
      "song": "El Scorcho"
    },
    {
      "band": "Chevelle",
      "year": 2015, 
      "song": "Family System"
    },
    {
      "band": "Chevelle",
      "year": 2015, 
      "song": "Family System"
    }
  ],
  "queryRecordCount": 300,
  "totalRecordCount": 10
}'); ?></code>
	<h3>Filter with another data not in the table (works with AJAX only)</h3>
	<p>With json and html direct the column needs to be placed.</p>
	<a data-filter="year" data-filter-value="2014" for="Canciones2" style="background:#000; color:#fff; padding:10px;margin-top:10px; cursor:pointer;display:inline-block;">Filtrar del 2014</a>
	<code data-type="codeeditor" data-lang="html"><?php echo htmlspecialchars('<a data-filter="year" data-filter-value="2014" for="Canciones2">Filtrar del 2014</a>'); ?></code>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="library/script.js"></script>
</body>
</html>