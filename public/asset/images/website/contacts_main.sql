/****** Object:  Table [dbo].[contacts_main]    Script Date: 4/2/2023 8:46:37 PM ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[contacts_main](
	[recordid] [int] NOT NULL,
	[updateid] [varchar](2) NULL,
	[con_name] [nvarchar](128) NULL,
	[con_title] [nvarchar](20) NULL,
	[con_forenames] [nvarchar](64) NULL,
	[con_surname] [nvarchar](64) NULL,
	[con_jobtitle] [nvarchar](128) NULL,
	[con_organisation] [nvarchar](64) NULL,
	[con_address] [nvarchar](254) NULL,
	[con_postcode] [nvarchar](10) NULL,
	[con_tel1] [nvarchar](254) NULL,
	[con_tel2] [nvarchar](254) NULL,
	[con_fax] [nvarchar](254) NULL,
	[con_type] [varchar](6) NULL,
	[con_dob] [datetime] NULL,
	[con_number] [nvarchar](64) NULL,
	[con_gender] [varchar](6) NULL,
	[rep_approved] [varchar](6) NULL,
	[seclevel] [int] NULL,
	[secgroup] [varchar](6) NULL,
	[updateddate] [datetime] NULL,
	[updatedby] [varchar](20) NULL,
	[con_ethnicity] [varchar](6) NULL,
	[con_snd_surname] [varchar](64) NULL,
	[con_snd_forenames] [varchar](32) NULL,
	[con_email] [nvarchar](128) NULL,
	[con_dopened] [datetime] NULL,
	[con_dclosed] [datetime] NULL,
	[con_subtype] [varchar](6) NULL,
	[con_empl_grade] [varchar](6) NULL,
	[con_payroll] [nvarchar](128) NULL,
	[con_orgcode] [varchar](8000) NULL,
	[con_clingroup] [varchar](8000) NULL,
	[con_unit] [varchar](8000) NULL,
	[con_directorate] [varchar](8000) NULL,
	[con_specialty] [varchar](8000) NULL,
	[con_locactual] [varchar](8000) NULL,
	[con_nhsno] [nvarchar](20) NULL,
	[con_dod] [datetime] NULL,
	[con_language] [varchar](6) NULL,
	[con_disability] [varchar](254) NULL,
	[con_anon] [varchar](6) NULL,
	[con_address_birth] [varchar](254) NULL,
	[con_postcode_birth] [varchar](10) NULL,
	[con_address_death] [varchar](254) NULL,
	[con_postcode_death] [varchar](10) NULL,
	[initials] [varchar](6) NULL,
	[login] [varchar](254) NULL,
	[sta_group] [varchar](64) NULL,
	[group] [varchar](6) NULL,
	[lockout] [varchar](1) NULL,
	[login_tries] [int] NULL,
	[logged_in] [varchar](1) NULL,
	[sta_subtype] [varchar](6) NULL,
	[sta_grade] [varchar](6) NULL,
	[sta_payroll] [nvarchar](128) NULL,
	[sta_orgcode] [varchar](6) NULL,
	[sta_clingroup] [varchar](6) NULL,
	[sta_unit] [varchar](6) NULL,
	[sta_directorate] [varchar](6) NULL,
	[sta_specialty] [varchar](6) NULL,
	[sta_locactual] [varchar](6) NULL,
	[cod_colour] [int] NULL,
	[sta_unit_rate] [decimal](13, 2) NULL,
	[cod_parent] [varchar](8000) NULL,
	[cod_parent2] [varchar](8000) NULL,
	[sta_user_type] [varchar](6) NULL,
	[sta_daccessstart] [datetime] NULL,
	[sta_daccessend] [datetime] NULL,
	[sta_activate_code] [varchar](254) NULL,
	[con_staff_include] [varchar](6) NULL,
	[con_sid] [nvarchar](254) NULL,
	[con_domain] [varchar](254) NULL,
	[sta_pwd_change] [varchar](6) NULL,
	[sta_last_login] [datetime] NULL,
	[con_loctype] [varchar](8000) NULL,
	[createdby] [varchar](20) NULL,
	[sta_profile] [int] NULL,
	[sta_lockout_dt] [datetime] NULL,
	[sta_lockout_reason] [nvarchar](254) NULL,
	[con_police_number] [nvarchar](128) NULL,
	[con_work_alone_assessed] [varchar](6) NULL,
	[con_sex_orientation] [varchar](6) NULL,
	[con_religion] [varchar](6) NULL,
	[sta_pwd_reset_code] [varchar](254) NULL,
	[cod_web_colour] [varchar](32) NULL,
	[CON_NOTES] [nvarchar](max) NULL,
	[PERMISSION] [nvarchar](max) NULL,
	[SAVEDOPTIONS] [nvarchar](max) NULL,
	[con_hier_location] [varchar](8000) NULL,
	[show_document] [char](1) NULL,
	[sta_lastlogin_dt]  AS (CONVERT([datetime],(((CONVERT([varchar](4),datepart(year,[sta_last_login]),(0))+replicate('0',(2)-len(CONVERT([varchar](2),datepart(month,[sta_last_login]),(0)))))+CONVERT([varchar](2),datepart(month,[sta_last_login]),(0)))+replicate('0',(2)-len(CONVERT([varchar](2),datepart(day,[sta_last_login]),(0)))))+CONVERT([varchar](2),datepart(day,[sta_last_login]),(0)),(0))),
	[sta_lastlogin_time]  AS (((replicate('0',(2)-len(CONVERT([varchar](2),datepart(hour,[sta_last_login]),(0))))+CONVERT([varchar](2),datepart(hour,[sta_last_login]),(0)))+replicate('0',(2)-len(CONVERT([varchar](2),datepart(minute,[sta_last_login]),(0)))))+CONVERT([varchar](2),datepart(minute,[sta_last_login]),(0))),
	[con_browse_order]  AS (case when [con_surname] IS NULL OR [con_surname]='' then [con_organisation] else ltrim(isnull([con_surname],'')) end),
	[con_browse_name]  AS (case when [con_surname] IS NULL OR [con_surname]='' then [con_organisation] else ltrim(rtrim((((isnull([con_title],'')+' ')+isnull([con_forenames],''))+' ')+isnull([con_surname],''))) end),
	[fullname]  AS (rtrim((ltrim(isnull([con_title],'')+' ')+ltrim(isnull([con_forenames],'')+' '))+isnull([con_surname],''))),
	[sta_daccessend_changed] [bit] NOT NULL
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO

ALTER TABLE [dbo].[contacts_main] ADD  DEFAULT ('FALSE') FOR [sta_daccessend_changed]
GO

