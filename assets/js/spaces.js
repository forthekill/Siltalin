// Embedded demo base object
var embed = function (name) {
  this.name = name;
  // Base options for dashboards
  // These can be changed per demo by adding the param
  // to the individual demo definition with the desired value
  this.module = "newDashboards";
  this.embed = "true";
  this.nav = "false";
  this.prompts = "false";
  // These get set per demo
  this.dash = "";
  this.page = "";
  this.user = "";
  this.ssoPass = "";
  this.spaceId = "";
};

// Define the demos user/pass/spaceId
// Sales
var sales = new embed("sales");
sales.user = "cmoynihan@birst.com";
sales.pass = "ooolyQNOH798YttatXJ6CEoPbg4P7gJ8";
sales.spaceId = "ecf884d1-2134-498d-836b-dd0d6a58eb8d"; // Demo - Sales Analytics 2017 Dev
sales.dash = encodeURIComponent("Sales");
sales.page = encodeURIComponent("Executive Dashboard");

// Retail
var retail = new embed("retail");
retail.user = "cmoynihan@birst.com";
retail.pass = "xARIhbrwqzEDhvAAJAZNFkDYxcRBLpnG";
//retail.pass = "9YmdzWuoCFGMljpOZa91xbVb3Bc4V7mL";
retail.spaceId = "410a0115-bc8f-48c1-8839-826b1b6a4be5"; // Demo - Mango Retail 2016
//retail.spaceId = "67f73134-7abd-48a2-b2b8-4c5caf82912e";
retail.dash = encodeURIComponent("Alternative Visuals");
retail.page = encodeURIComponent("Revenue Overview");
retail.nav = true;
retail.hideHeader = false;
retail.hideSubHeader = true;

// Marketing
var marketing = new embed("marketing");
marketing.user = "demo@birst.com";
marketing.pass = "STsfCdrRYBOiGELdzraqpPrAWZlgH1X8";
marketing.spaceId = "4532be61-4178-4128-abbd-434087c01381";
marketing.dash = encodeURIComponent("Marketing Analytics");
marketing.page = encodeURIComponent("Overview");

// Supply Chain
var chain = new embed("chain");
chain.user = "inforum@birst.com";
chain.pass = "ENOgdejcnuyDSu8DirMf64d23tCFhQnV";
chain.spaceId = "809c2a14-3ccd-4698-804f-cbf40b1d211a";
chain.dash = encodeURIComponent("CSF & SM");
chain.page = encodeURIComponent("Spend Overview");

// Fleet Management
var fleet = new embed("fleet");
fleet.user = "demo@birst.com";
fleet.pass = "qqByfD6N4RnCl7drJIzsIkfLTl1A0ZwY";
fleet.spaceId = "78241abb-8a0d-441e-80d3-e9068699f463";
fleet.dash = encodeURIComponent("Fleet Management");
fleet.page = encodeURIComponent("Vehicle Issues Display");

// Higher Education
var education = new embed("education");
education.user = "demo@birst.com";
education.pass = "UhUAOIE0pRM4eC6T7n1FMyB8ZaZCKvLp";
education.spaceId = "ffe53469-3afb-47c0-bb09-1496e6ad9a61";
education.dash = encodeURIComponent("Higher Education Analysis");
education.page = encodeURIComponent("Admissions");

// Insurance
var insurance = new embed("insurance");
insurance.user = "demo@birst.com";
insurance.pass = "b94Je0P5njaM0uYQMoCUstyJeOeOs25k";
insurance.spaceId = "94dfafe3-b992-4c0b-aed8-0d9ee45aa503";
insurance.dash = encodeURIComponent("Insurance");
insurance.page = encodeURIComponent("Industry");

// Financial Services
var finance = new embed("finance");
finance.user = "demo@birst.com";
finance.pass = "XIefj3yxXBDGLN5AXLMBYJjGxv2THcps";
finance.spaceId = "ea0b9a54-2e02-4513-bb34-1cadfd37d8a4";
finance.dash = encodeURIComponent("Capital Financial");
finance.page = encodeURIComponent("Fund House Review");

// Usage Tracking
var usage = new embed("usage");
usage.user = "demo@birst.com";
usage.pass = "QTo9diXd2E3L04SAa8ehtg35Y9W0rCFn";
usage.spaceId = "245cae93-7a6f-48bc-9ccb-a417783bc333";
usage.dash = encodeURIComponent("Collections");
usage.page = encodeURIComponent("Key Usage Statistics");

// Human Resources
var human = new embed("human");
human.user = "demo@birst.com";
human.pass = "YHMSAlj4YXwJ49u5oaMRLw45vAVBAs1o";
human.spaceId = "069d1e95-9b00-4589-b089-9ab057f07068";
human.dash = encodeURIComponent("Human Capital Analytics");
human.page = encodeURIComponent("Challenges");

// Billion Rows
var exasol = new embed("exasol");
exasol.user = "demo@birst.com";
exasol.pass = "SiHPXgtscfYPChehvdflds33vMdyMnSE";
exasol.spaceId = "a5616300-b27a-4ef3-9b30-93bf495889c0";
exasol.dash = encodeURIComponent("Analytics");
exasol.page = encodeURIComponent("Columns & Bars");

// Call Center??
var call = new embed("call");
call.user = "demo@birst.com";
call.pass = "";
call.spaceId = "";
call.dash = encodeURIComponent("");
call.page = encodeURIComponent("");

// Forecasting??
var forecast = new embed("forecast");
forecast.user = "demo@birst.com";
forecast.pass = "";
forecast.spaceId = "";
forecast.dash = encodeURIComponent("");
forecast.page = encodeURIComponent("");

// Embedded Reports
// Pipeline
var pipeline = new embed("pipeline");
pipeline.module = "visualizer";
pipeline.user = "cmoynihan@birst.com";
pipeline.pass = "ooolyQNOH798YttatXJ6CEoPbg4P7gJ8";
pipeline.spaceId = "ecf884d1-2134-498d-836b-dd0d6a58eb8d"; // Demo - Sales Analytics 2017 Dev
pipeline.reportName = encodeURIComponent("/shared/Pipeline.viz.dashlet");
pipeline.embeddedView = "true";
pipeline.titleText = "Pipeline<small>Current</small>";

// Top Returns
var returns = new embed("returns");
returns.module = "visualizer";
returns.user = "cmoynihan@birst.com";
returns.pass = "ENOgdejcnuyDSu8DirMf64d23tCFhQnV";
returns.spaceId = "809c2a14-3ccd-4698-804f-cbf40b1d211a"; // Infor CSF & SCM
returns.reportName = encodeURIComponent("/shared/reports/Supplier Overview/Top Items Returned.viz.dashlet");
returns.embeddedView = "true";
returns.titleText = "Returns<small>Top Products</small>";

// Channel Revenue
var revenue = new embed("revenue");
revenue.module = "visualizer";
revenue.user = "cmoynihan@birst.com";
revenue.pass = "xARIhbrwqzEDhvAAJAZNFkDYxcRBLpnG";
revenue.spaceId = "410a0115-bc8f-48c1-8839-826b1b6a4be5"; // Demo - Mango Retail 2016
revenue.reportName = encodeURIComponent("/shared/Revenue/Product Category Revenue.viz.dashlet");
revenue.embeddedView = "true";
revenue.titleText = "Revenue<small>Product Category</small>";
